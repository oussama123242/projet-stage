<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Migration pour la table candidatures
public function up()
{
    Schema::create('candidatures', function (Blueprint $table) {
        $table->id();
        $table->string('prenom');
        $table->string('nom');
        $table->string('email');
        $table->string('telephone');
        $table->string('cv_path');
        $table->string('poste');
        $table->string('diplome')->nullable();
        $table->string('ecole')->nullable();
        $table->date('date_debut_formation')->nullable();
        $table->date('date_fin_formation')->nullable();
        $table->string('poste_experience')->nullable();
        $table->string('entreprise')->nullable();
        $table->date('date_debut_experience')->nullable();
        $table->date('date_fin_experience')->nullable();
        $table->text('motivation')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
};
