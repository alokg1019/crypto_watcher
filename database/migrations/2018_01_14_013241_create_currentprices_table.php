<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentpricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currentprices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("symbol_id");
            $table->dateTime('date');
            $table->integer('mkt_currency_id');
            $table->double('txVolume');
            $table->double('txCount');
            $table->double('marketCap');
            $table->double('price');
            $table->double('exchangeVolumne');
            $table->double('generatedCoins');
            $table->double('fees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currentprices');
    }
}
