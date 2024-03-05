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
        Schema::create('jouers', function (Blueprint $table) {
            $table->id();
            $table->string('Image');
            $table->string('Reponse1');
            $table->string('Reponse2');
            $table->string('Reponse3');
            $table->string('ReponseCorrect');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jouers');
    }
};
