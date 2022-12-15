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
        Schema::create('apprenants_preparation_briefs', function (Blueprint $table) {
            $table->id();
            $table->date('date_affectation');
            $table->unsignedBigInteger('apprenant_id');
            $table->foreign('apprenant_id')->references('id')->on('apprenants');
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
        Schema::dropIfExists('apprenant_preparation_briefs');
    }
};
