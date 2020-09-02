<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_hargas', function (Blueprint $table) {
            $table->bigIncrements('bigIncrements');
            $table->timestamps();
            $table->integer('idBarang');
            $table->string('tipeCustomer',200);
            $table->integer('harga');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_hargas');
    }
}
