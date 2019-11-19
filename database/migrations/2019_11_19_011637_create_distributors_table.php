<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('kapasitas');
            $table->integer('stok_barang');
            $table->uuid('kota_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('distributors', function (Blueprint $table) {
            $table->foreign('kota_id')->references('id')->on('kotas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distributors');
    }
}
