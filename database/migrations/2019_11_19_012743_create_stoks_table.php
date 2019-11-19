<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('stoks', function (Blueprint $table) {
            $table->uuid('produk_id');
            $table->uuid('distributor_id');
            $table->integer('jumlah');
            $table->timestamps();
        });
        Schema::table('stoks', function (Blueprint $table) {
            $table->foreign('produk_id')->references('id')->on('produks');
            $table->foreign('distributor_id')->references('id')->on('distributors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stoks');
    }
}
