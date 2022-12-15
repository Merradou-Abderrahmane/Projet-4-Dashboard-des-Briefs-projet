<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apprenant>
 */
class ApprenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->phoneNumber,
            'date_naissance' => $this->faker->date,
            'lieu_naissance' => $this->faker->city,
            'sexe' => $this->faker->randomElement(['M', 'F']),
            'adresse' => $this->faker->address,
            'photo' => $this->faker->imageUrl(640, 480, 'people'),
            'annee_formation_id' => $this->faker->numberBetween(1, 10),
            'groupe_id' => $this->faker->numberBetween(1, 10),
            'formateur_id' => $this->faker->numberBetween(1, 10),
            'preparation_tache_id' => $this->faker->numberBetween(1, 10),
            'preparation_brief_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
