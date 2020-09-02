<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('noFaktur');
            $table->string('email',300);
            $table->date('tglTransaksi');
            $table->integer('ongkir');
            $table->string('namaPenerima',300);
            $table->string('alamatPenerima',300);
            $table->string('namaDropship',300);
            $table->string('hpDropship',26);
            $table->integer('totalTransaksi');
            $table->integer('totalDiskon');
            $table->string('promo',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
