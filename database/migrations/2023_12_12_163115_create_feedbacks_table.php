<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('phone');
            $table->boolean('enable');
            $table->string('desc');
            $table->integer('point');


            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('id')->on('users');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
