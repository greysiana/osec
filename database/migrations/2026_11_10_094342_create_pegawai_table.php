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
            $table->id('Id_pegawai');
            $table->string('Kode_pegawai', 20)->unique();
            $table->string('Nama', 100);
            $table->string('Foto', 255)->nullable();
            $table->enum('Jenis_kelamin',['Laki-laki','Perempuan']);
            $table->string('Tempat_lahir', 100)->nullable();
            $table->date('Tanggal_lahir')->nullable();
            $table->string('No_hp', 20)->nullable();
            $table->string('Email', 100)->nullable()->unique();
            $table->string('Provinsi', 100)->nullable();
            $table->string('Kabupaten', 100)->nullable();
            $table->string('Kecamatan', 100)->nullable();
            $table->string('Kelurahan', 100)->nullable();
            $table->text('Alamat')->nullable();
            $table->string('Kode_pos', 10)->nullable();
            $table->string('Pendidikan_terakhir', 50)->nullable();
            $table->string('Jurusan', 50)->nullable();
            $table->enum('Jabatan',['Admin', 'Tutor', 'Teacher Assistant', 'Direktur', 'Cleaning Service']);
            $table->enum('Status_kepegawaian',['Tetap','Kontrak','Magang']);
            $table->enum('Status',['Aktif', 'Tidak Aktif']);
            $table->date('Tanggal_masuk');
            $table->string('Username', 50)->unique();
            $table->string('Password', 255);
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
