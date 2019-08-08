<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\HandlerStack;
use Theodoros\Coinmotion\ApiClient;
use Theodoros\Coinmotion\Rates;

final class TestRates extends TestCase
{
    protected $jsonFixture;
    protected $response;

    protected function setUp():void
    {
        $this->jsonFixture = file_get_contents(__DIR__.'/fixtures/rates.json'); 
        $mock = new MockHandler([
            new Response(200, [], $this->jsonFixture),
        ]);
        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $this->response = $client->get('/rates')->getBody()->getContents();
    }
    /**
     * @test
     */
    public function rates_request_returns_success()
    {
        $rates = Rates::getRates($this->response);
        $this->assertEquals(true, $rates->success);
    }

    /**
     * @test
     */
    public function rates_request_returns_json_string()
    {
        $rates = Rates::getRates($this->response);
        $this->assertJson(@json_encode($rates));
    }
    
     /**
     * @return ApiClient
     */
    protected static function createApiClient()
    {
        return new ApiClient(new Client());
    }
}