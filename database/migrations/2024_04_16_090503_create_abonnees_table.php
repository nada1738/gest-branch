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
        Schema::create('abonnees', function (Blueprint $table) {
            $table->bigIncrements('police_abonnee')->unsigned();
            $table->string('nom', 255);
            $table->string('cne', 255);
            $table->string('adresse', 255);
            $table->string('telephone', 255);
            $table->timestamps();
            $table->unique('police_abonnee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnees');
    }
};
