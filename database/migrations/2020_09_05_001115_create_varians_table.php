<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idBarang');
            $table->string('namaVariasi');
            $table->integer('hargaProduk');
            $table->integer('hargaBeli');
            $table->integer('stok');
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
        Schema::dropIfExists('varians');
    }
}
