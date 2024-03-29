<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('langues', function (Blueprint $table) {
            $table->id();
            $table->string('langues');
            $table->string('proficiency');
            $table->timestamps();
            $table->foreignId('cv_id')->references('id')->on('cv')->onDelete('cascade');

        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langues');
    }
};
