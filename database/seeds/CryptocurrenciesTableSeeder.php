<?php

use Illuminate\Database\Seeder;

class CryptocurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currency_list = array(

            0 => array(
                'symbol' => 'BTC',
                'name' => 'Bitcoin'
            ),
            1 => array(
                'symbol' => 'DOGE',
                'name' => 'Dogecoin'
            ),
            2 => array(
                'symbol' => 'ETH',
                'name' => 'Ethereum'
            ),
            3 => array(
                'symbol' => 'LTC',
                'name' => 'Litecoin'
            )

        );


        foreach ($currency_list as $currency)
        {
            $cc = new \App\Cryptocurrency();
            $cc->symbol = $currency['symbol'];
            $cc->currency_name = $currency['name'];
            $cc->currency_icon = '';
            $cc->save();
        }


    }
}
