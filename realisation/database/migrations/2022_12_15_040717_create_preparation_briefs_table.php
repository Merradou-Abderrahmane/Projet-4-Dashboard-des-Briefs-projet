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
        Schema::create('preparation_briefs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_brief');
            $table->string('description');
            $table->integer('duree');
            $table->unsignedBigInteger('formateur_id');
            $table->foreign('formateur_id')->references('id')->on('formateurs');
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
        Schema::dropIfExists('preparation_briefs');
    }
};
