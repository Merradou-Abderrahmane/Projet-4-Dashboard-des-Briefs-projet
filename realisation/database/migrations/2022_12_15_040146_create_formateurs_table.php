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
    public function up()
    {
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('sexe');
            $table->string('situation_familiale');
            $table->string('niveau_etude');
            $table->string('specialite');
            $table->string('diplome');
            $table->string('experience');
            $table->string('langue');
            $table->string('competence');
            $table->string('telephone');
            $table->string('adresse');
            $table->string('cin');
            $table->string('photo');
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
        Schema::dropIfExists('formateurs');
    }
};
