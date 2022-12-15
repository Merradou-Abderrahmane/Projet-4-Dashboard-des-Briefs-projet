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
        if (!Schema::hasTable( table :'groupes'))  {
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_groupe');
            $table->string('logo');
            $table->timestamps();
        });
    }
        //create new with foreign keys above
        Schema::table('groupes', function (Blueprint $table) {
            $table->unsignedBigInteger('annee_formation_id');
            $table->foreign('annee_formation_id')->references('id')->on('annes_formation');
            $table->unsignedBigInteger('formateur_id');
            $table->foreign('formateur_id')->references('id')->on('formateurs');
            });

        
        

}
        

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupes');
    }
};
