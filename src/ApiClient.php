<?php 
namespace Theodoros\Coinmotion;
require_once 'vendor/autoload.php';

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use Guzzle\Http\Exception\ClientErrorResponseException;

class ApiClient
{
    const url = "https://api.coinmotion.com/v2";
    public $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Send request to Coinmotion.com 
     * @param Array $options
     * @return object $httpResponse
     */
    public function sendRequest(array $options)
    {
        $request = new Request($options['http_method'], static::url .$options['path']);
        $httpResponse = $this->client->send($request, $options);
        
        if ($httpResponse->getStatusCode() != 200) {
            throw new \RuntimeException('Bad request');
        }
        
        return $httpResponse;
    }
   
}