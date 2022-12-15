<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use models 
use App\Models\anne_Formation;
use App\Models\apprenant_groupe;
use App\Models\apprenant_preparation_tache;
use App\Models\apprenant_preparation_brief;
use App\Models\apprenant;
use App\Models\formateur;
use App\Models\groupe_preparation_brief;
use App\Models\groupe;
use App\Models\preparation_tache;
use App\Models\preparation_brief;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // create seeders
        anne_Formation::factory(10)->create();
        apprenant_groupe::factory(10)->create();
        apprenant_preparation_tache::factory(10)->create();
        apprenant_preparation_brief::factory(10)->create();
        apprenant::factory(10)->create();
        formateur::factory(10)->create();
        groupe_preparation_brief::factory(10)->create();
        groupe::factory(10)->create();
        preparation_tache::factory(10)->create();
        preparation_brief::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
