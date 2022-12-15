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
        Schema::create('apprenants_preparation_taches', function (Blueprint $table) {
            $table->id();
            $table->timestamps('date_debut');
            $table->timestamps('date_fin');
            $table->unsignedBigInteger('apprenant_id');
            $table->foreign('apprenant_id')->references('id')->on('apprenants');
            $table->unsignedBigInteger('preparation_tache_id');
            $table->foreign('preparation_tache_id')->references('id')->on('preparation_taches');
            $table->unsignedBigInteger('apprenant_preparation_brief_id');
            $table->foreign('apprenant_preparation_brief_id')->references('id')->on('apprenants_preparation_briefs');
            // status: default = en pause, 1 = en cours, 2 = terminé
            $table->string('status')->default('en pause');
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
        Schema::dropIfExists('apprenant_preparation_taches');
    }
};
