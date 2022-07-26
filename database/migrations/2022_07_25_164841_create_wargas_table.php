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
        Schema::create('wargas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nomor_kk')->nullable();
            $table->string('validasi')->nullable();
            $table->string('nik')->nullable();
            $table->string('nama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->string('hubungan_keluarga')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('status_pendidikan')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('dusun')->nullable();
            $table->string('rw')->nullable();
            $table->string('rt')->nullable();
            $table->string('status_kawin')->nullable();
            $table->date('tanggal_nikah')->nullable();
            $table->string('nomor_buku_nikah')->nullable();
            $table->string('kua')->nullable();
            $table->string('akte_lahir')->nullable();
            $table->date('tanggal_kematian')->nullable();
            $table->time('pukul_kematian')->nullable();
            $table->string('keterangan_kematian')->nullable();
            $table->string('nomor_bpjs')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('telepon')->nullable();
            $table->string('nomor_ijazah')->nullable();
            $table->string('tanggal_cerai')->nullable();
            $table->string('nomor_akta_cerai')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->boolean('penyandang_cacat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wargas');
    }
};
