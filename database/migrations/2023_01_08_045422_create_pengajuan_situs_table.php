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
        Schema::create('pengajuan_situs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemilik_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('foto', 80)->nullable();
            $table->string('ktp', 80)->nullable();
            $table->string('npwp_pemilik', 80)->nullable();

            $table->string('nama_usaha', 100);
            $table->longText('alamat_usaha');
            $table->foreignId('jenis_usaha_id')->nullable()->constrained('jenis_usahas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('jumlah_karyawan')->nullable();
            $table->enum('status_tempat', ['pemilik', 'sewa']);
            $table->string('bukti_tempat', 80)->nullable();
            $table->string('npwp_usaha', 80)->nullable();
            $table->string('akta_pendirian', 80)->nullable();
            $table->string('surat_izin_gangguan', 80)->nullable();
            $table->string('sk_domisili', 80)->nullable();
            $table->string('pbb', 80)->nullable();
            $table->enum('status', ['request', 'process', 'pending', 'approve', 'reject']);
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
        Schema::dropIfExists('pengajuan_situs');
    }
};
