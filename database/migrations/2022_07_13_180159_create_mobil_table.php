<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->id('kendaraan_id');
            $table->string('tahun_keluaran');
            $table->string('warna');
            $table->string('harga');
            $table->string('mesin_mobil');
            $table->integer('kapasitas_penumpang');
            $table->string('tipe');
            $table->boolean('soldout');
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
        Schema::dropIfExists('mobil');
    }
}
