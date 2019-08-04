<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Theodoros\Coinmotion\ApiClient;
use Theodoros\Coinmotion\Rates;

final class TestRates extends TestCase
{
    /**
     * @test
     */
    public function rates_request_returns_success()
    {
        $rates = Rates::getRates();
        $this->assertEquals(true, $rates->success);
    }

    /**
     * @test
     */
    public function rates_request_returns_json_string()
    {
        $rates = Rates::getRates();
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