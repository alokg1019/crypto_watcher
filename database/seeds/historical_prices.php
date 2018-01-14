<?php

use Illuminate\Database\Seeder;

class historical_prices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private function loadTable($path,$symbol_id,$mkt_id)
    {
        if (($handle = fopen(public_path() . $path, 'r')) !== FALSE) {

            $seq = 0;//skipping the header line

            while (($data = fgetcsv($handle, 0, ',')) !== FALSE) {
                $seq++;
                if ($seq === 1) {
                    continue;
                }

                $hp = new \App\HistoricalPrices();
                $hp->symbol_id = $symbol_id;
                $hp->date = $data [0];
                $hp->mkt_currency_id = $mkt_id;
                $hp->txVolume = $data[1];
                $hp->txCount = $data[2];
                $hp->marketCap = $data[3];
                $hp->price = $data[4];
                $hp->exchangeVolumne = $data[5];
                $hp->generatedCoins = $data[6];
                $hp->fees = $data[7];
                $hp->save();
            }
            fclose($handle);
        }
    }

    public function run()
    {
        $this->loadTable('/seeds/btc.csv',1,1);
        $this->loadTable('/seeds/doge.csv',2,1);
        $this->loadTable('/seeds/eth.csv',3,1);
        $this->loadTable('/seeds/lth.csv',4,1);
    }
}
