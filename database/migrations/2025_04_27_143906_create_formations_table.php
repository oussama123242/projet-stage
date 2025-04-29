<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // Migration pour la table formations
  public function up()
  {
      Schema::create('formations', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('candidature_id'); // Ajoutez cette ligne
          $table->string('diplome');
          $table->string('ecole');
          $table->date('date_debut_formation');
          $table->date('date_fin_formation');
          $table->timestamps();
  
          $table->foreign('candidature_id')->references('id')->on('candidatures'); // Assurez-vous que la relation est bien définie
      });
  }
  


public function down()
{
    Schema::dropIfExists('formations');
}

};
