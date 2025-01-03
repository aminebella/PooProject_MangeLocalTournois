<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classement;
use App\Models\Team;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classement>
 */
class ClassementFactory extends Factory
{
    protected $model= Classement::class;

    public function definition(): array
    {
        return [
            'team_id' => Team::factory(), // Associe à une équipe
            'match_played' => $this->faker->numberBetween(0, 38), // Nombre de matchs joués
            'win' => $this->faker->numberBetween(0, 38), // Nombre de victoires
            'lose' => $this->faker->numberBetween(0, 38), // Nombre de défaites
            'tied' => $this->faker->numberBetween(0, 38), // Nombre de matchs nuls
            'points' => $this->faker->numberBetween(0, 114), // Points de l'équipe (ex. : 3 points par victoire)
            'goals' => $this->faker->numberBetween(0, 100), // Nombre de buts marqués
        ];
    }
}
