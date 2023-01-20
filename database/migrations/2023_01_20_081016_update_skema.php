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
        Schema::table('lowongan', function (Blueprint $table) {
            $table->dropColumn('tempat_magang_id');
        });

        Schema::dropIfExists('tempat_magang');

        Schema::table('users', function (Blueprint $table) {
            $table->string('asal_univ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('asal_univ');
        });

        Schema::create('tempat_magang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_perusahaan')->unique();
            $table->string('nama_perusahaan');
            $table->string('logo_perusahaan');
            $table->string('kota');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('email_perusahaan');
            $table->timestamps();
        });

        Schema::table('lowongan', function (Blueprint $table) {
            $table->foreignId('tempat_magang_id');
        });
    }
};
