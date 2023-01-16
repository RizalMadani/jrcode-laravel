<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_magang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_perusahaan')->unique();
            $table->string('nama_perusahaan');
            $table->string('provinsi');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('email_perusahaan');
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
        Schema::dropIfExists('tempat_magang');
    }
};