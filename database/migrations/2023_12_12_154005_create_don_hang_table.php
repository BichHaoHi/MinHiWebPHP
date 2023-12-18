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
        Schema::create('don_hang', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('address');
            $table->string('phone');
            $table->string('status');
            $table->boolean('enable');
            $table->double('total');

            // Khóa ngoại đến bảng User
        $table->unsignedBigInteger('idUser'); // Phải là kiểu unsignedBigInteger để trùng với kiểu id trong bảng User
        $table->foreign('idUser')->references('id')->on('users'); // Thay 'users' bằng tên thực của bảng User
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hang');
    }
};
