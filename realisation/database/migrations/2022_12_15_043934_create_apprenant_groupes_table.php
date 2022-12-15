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
        Schema::create('apprenants_groupes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apprenant_id');
            $table->foreign('apprenant_id')->references('id')->on('apprenants');
            $table->unsignedBigInteger('groupe_id');
            $table->foreign('groupe_id')->references('id')->on('groupes');
            // statut: 0: en attente, 1: accepté, 2: refusé
            $table->string('statut');
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
        Schema::dropIfExists('apprenant_groupes');
    }
};
