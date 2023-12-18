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
        Schema::create('cthd', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idDonHang');
            $table->unsignedBigInteger('idProduct');
            $table->integer('quantity');
            $table->double('price');
            $table->timestamps();

            // Thêm foreign key references nếu cần
            $table->foreign('idDonHang')->references('id')->on('don_hang')->onDelete('cascade');
            $table->foreign('idProduct')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cthd');
    }
};
