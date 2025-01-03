<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Matche;
use App\Models\Team;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matche>
 */
class MatcheFactory extends Factory
{
    protected $model=Matche::class;

    public function definition(): array
    {
        return [
            "team1_id" => Team::factory(),
            "team2_id" => Team::factory(),
            "kickoff_time" => $this->faker->dateTimeBetween('now', '+1 month'), // Date du match entre maintenant et un mois
            "status" => $this->faker->randomElement(['schedule', 'finished']),
            "score_team1" => $this->faker->optional()->numberBetween(0, 5), // Score de l'équipe 1, peut être null si non terminé
            "score_team2" => $this->faker->optional()->numberBetween(0, 5), // Score de l'équipe 2, peut être null si non terminé
        ];
    }
}
