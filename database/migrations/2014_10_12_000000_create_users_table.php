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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 40);
            $table->string('tempat_lahir', 60)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('jk', ['l', 'p'])->nullable();
            $table->enum('kewarganegaraan', ['WNI', 'WNA'])->nullable();
            $table->string('agama', 20)->nullable();
            $table->string('pekerjaan', 40)->nullable();
            $table->longText('alamat')->nullable();
            $table->string('telp', 16)->nullable();

            // $table->string('email')->unique();
            $table->string('username', 20)->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['umum', 'administrator', 'admin', 'kepala']);
            $table->rememberToken();
            $table->boolean('isaktif')->default(true);
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
        Schema::dropIfExists('users');
    }
};
