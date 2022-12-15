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
        Schema::create('preparation_taches', function (Blueprint $table) {
            $table->id();
            $table->string('nom_tache');
            $table->string('description');
            $table->integer('duree');
            $table->unsignedBigInteger('preparation_brief_id');
            $table->foreign('preparation_brief_id')->references('id')->on('preparation_briefs');
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
        Schema::dropIfExists('preparation_taches');
    }
};
