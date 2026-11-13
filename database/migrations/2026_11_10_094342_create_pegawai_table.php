<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('id_pegawai');
            $table->string('kode_pegawai', 20)->unique();
            $table->string('nama', 100);
            $table->string('foto', 255)->nullable();
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->string('email', 100)->nullable()->unique();
            $table->string('provinsi', 100)->nullable();
            $table->string('kabupaten', 100)->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('kelurahan', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->string('kode_pos', 10)->nullable();
            $table->string('pendidikan_terakhir', 50)->nullable();
            $table->string('jurusan', 50)->nullable();
            $table->enum('jabatan',['Admin', 'Tutor', 'Teacher Assistant', 'Direktur', 'Cleaning Service']);
            $table->enum('status_kepegawaian',['Tetap','Kontrak','Magang']);
            $table->enum('status',['Aktif', 'Tidak Aktif']);
            $table->date('tanggal_masuk');
            $table->string('username', 50)->unique();
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
