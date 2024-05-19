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
        Schema::create('branchements', function (Blueprint $table) {
            $table->bigIncrements('n_order')->unsigned();
            $table->unsignedBigInteger('n_police');
            $table->string('tournee');
            $table->string('nature');
            $table->string('l_branch');
            $table->string('l_chaussée');
            $table->string('nature_chaussée');
            $table->date('date_ver');
           
            $table->string('n_ver');
            $table->date('date_realisation');
            $table->string('observation');
            $table->foreign('n_police')->references('police_abonnee')->on('abonnees')->onDelete('cascade');
            $table->timestamps();
            $table->unique('n_order');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branchements');
    }
};
