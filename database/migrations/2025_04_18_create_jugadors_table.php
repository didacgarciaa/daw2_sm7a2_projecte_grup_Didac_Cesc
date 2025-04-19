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
        Schema::create('jugadors', function (Blueprint $table) {
            $table->id('identificador'); // Primary key
            $table->string('nom');
            $table->string('correu');
            $table->string('adreca');
            $table->string('ciutat');
            $table->string('districte');
            $table->string('telefon');
            $table->unsignedBigInteger('equip'); // Foreign key
            $table->foreign('equip')->references('identificador')->on('equips')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadors');
    }
};