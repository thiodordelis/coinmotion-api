<?php namespace Theodoros\Coinmotion;

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Theodoros\Coinmotion\ApiClient;

/**
 * Class Rates 
*  @author Theodoros Deligiannidis <thiodor@gmail.com>
*/

class Rates
{

  /**
   * Get cryptocurrency rates from Coinmotion.com
   * @param none
   * @return JSON 
  */
   public function getRates()
   {
      $apiClient = static::createApiClient();
      $response = $apiClient->sendRequest(['http_method' => 'GET', 'path' => '/rates']);
      return @json_decode($response->getBody());
   }

    /**
     * @return ApiClient
     */
    protected static function createApiClient()
    {
        return new ApiClient(new Client());
    }
}
