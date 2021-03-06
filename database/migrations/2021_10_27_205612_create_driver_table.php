<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver', function (Blueprint $table) {
            $table->increments('id_driver');
            $table->string('nama_driver');
            $table->integer('nomor_telepon');
            $table->string('alamat_driver');
            $table->date('tanggal_lahir');
            $table->integer('nomor_ktp');
            $table->string('kendaraan');
            $table->string('foto_stnk');
            $table->integer('id_pendaftaran');

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
        Schema::dropIfExists('driver');
    }
}
