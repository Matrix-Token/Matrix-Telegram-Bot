<?php
namespace MatrixToken\MatrixTelegramBot\Commands\Coinsbit;

use Telegram\Bot\Commands\Command;
use GuzzleHttp\Client;
class CurrentPriceCommand extends Command
{
    protected $name = '1';
    protected $api = "v1/public/ticker?market=MTIX_USDT";
    public function handle()
    {
        // Create a client with a base URI
        $client = new \GuzzleHttp\Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://coinsbit.io/api/',
        ]);
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', $this->api);
        $body = $response->getBody();
        $arr_body = json_decode($body,true);
        $price = $arr_body['result']['last'];
        $timestamp = date("Y-m-d h:i:s",time());
        $this->replyWithMessage([
            'text' => 
                "السعر الحالي : $price USDT 
                    تاريخ السعر : $timestamp"
            
        ]);
    }
}