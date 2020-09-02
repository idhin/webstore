<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('namaBarang',300);
            $table->integer('idKategori');
            $table->string('tipeProduk',300);
            $table->integer('berat');
            $table->string('variasi1',300);
            $table->string('variasi2',300);
            $table->string('variasi3',300);
            $table->integer('stok');
            $table->integer('hargaModal');
            $table->integer('hargaCoret');
            $table->string('judulHalaman',300);
            $table->string('slug',300);
            $table->string('metaDeskripsi',300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
