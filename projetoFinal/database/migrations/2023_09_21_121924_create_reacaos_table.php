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
        Schema::create('reacaos', function (Blueprint $table) {
            $table->id();
            $table->string('idGoogle');
            $table->integer('plotTwist')->nullable();
            $table->integer('emocionante')->nullable();
            $table->integer('medo')->nullable();
            $table->integer('amei')->nullable();
            $table->integer('nojo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reacaos');
    }
};
