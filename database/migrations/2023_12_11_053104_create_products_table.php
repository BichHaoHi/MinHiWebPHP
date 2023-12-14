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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('provider');
            $table->string('sex');
            $table->string('skin_problem');
            $table->string('skin_type');
            $table->text('description');
            $table->double('quantity');
            $table->double('price');
            $table->text('link_photo');
            $table->text('photo1');
            $table->text('photo2');
            $table->text('photo3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
