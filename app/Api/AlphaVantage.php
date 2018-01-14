<?php


namespace App\Api;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class AlphaVantage{


    const KEY = '8HN3TPHLIP6Q9KR0';

    public function current($symbol,$market='USD',$datatype='json',$returnFormat='json')
    {

        $client = new Client();

        //https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_INTRADAY&symbol=BTC&market=CNY&apikey=demo
        $uri = 'https://www.alphavantage.co/query?function=DIGITAL_CURRENCY_INTRADAY&symbol='.$symbol.'&market='.$market.'&apikey='.self::getKey();


        $result = $client->get($uri);

        if($datatype === "json") {
            return $returnFormat === 'json' ? $result->getBody()->getContents() : json_decode($result->getBody()->getContents(), true);
        } else{
            return "Invalid Request";
        }
    }

    function getKey()
    {
        return self::KEY;
    }

}

?>