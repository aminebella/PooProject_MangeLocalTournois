<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;
use App\Models\Player;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    protected $model = Player::class;

    public function definition(): array
    {
        return [
            "fullname"=>$this->faker->name(),
            "age"=>$this->faker->numberBetween(10,50),
            "number"=>$this->faker->numberBetween(1, 99),
            "position"=>$this->faker->randomElement(['Goalkeeper', 'Defender', 'Midfielder', 'Forward']),
            "nationality"=>$this->faker->country(),
            "team_id"=>Team::factory(),
        ];
    }
}
