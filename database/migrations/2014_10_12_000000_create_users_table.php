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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('name');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('kelas', ['10', '11', '12']);
            $table->string('jurusan');
            $table->string('eskul');
            $table->string('no_hp');
            $table->string('almt');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'pembina', 'osis', 'siswa'])->default('siswa');
            $table->rememberToken();
            // $table->string('verify_key');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
