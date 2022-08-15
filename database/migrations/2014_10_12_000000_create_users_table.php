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
            $table->foreignId('new_student_id')->nullable();
            $table->string('slug')->autoIncrement()->unique();
            $table->string('nama')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('foto')->default('user-image/user.png');
            $table->string('jk')->nullable();
            $table->string('telepon')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('alamat')->nullable();
            $table->enum('role',['Admin', 'Operator', 'Siswa']);
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
