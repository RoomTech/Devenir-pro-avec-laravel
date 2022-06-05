<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emploi>
 */
class EmploiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->name,
            'description' => $this->faker->paragraph(2),
            'disponible' => $this->faker->boolean,
            'contrat_id' => \App\Models\Contrat::all()->random()->id,
            'user_id' => null,
        ];
    }
}
