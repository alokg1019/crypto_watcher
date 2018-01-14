<?php

namespace App;

use \App\Api\AlphaVantage;
use Illuminate\Database\Eloquent\Model;
use DB;

class Cryptocurrency extends Model
{
    //
    public function getlist()
    {
        return DB::select(DB::raw('select distinct a.symbol,a.currency_name,b.price,b.date from historical_prices b, cryptocurrencies a where b.symbol_id = a.id order by b.date desc'));
    }

    public function getInfo($id)
    {
        return DB::select(DB::raw("select a.symbol,a.currency_name,b.price,b.date from historical_prices b, cryptocurrencies a where b.symbol_id = a.id and a.symbol = '$id' order by b.date desc"));
    }

    public function getCurrentPrice($symbol)
    {
        if (empty($symbol)) {
            return true;
        }

        $response = array();

        $av = new AlphaVantage();
        $result = $av->current($symbol, 'USD', 'json', 'array');

        $result_keys = array_keys($result);

        // taking only the data
        $result = $result[$result_keys[1]];

        foreach ($result as $key => $value) {

            $v_keys = array_keys($value);

            $response['status'] = "success";
            $response['price'] = $value[$v_keys[0]];

            //taking only the first record
            break;

        }

        echo json_encode($response);

    }

}