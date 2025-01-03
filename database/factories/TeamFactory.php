<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->company(),
            'logo' => $this->faker->imageUrl(100, 100, 'sports'),
            'coach' => $this->faker->unique()->name(), // Coach unique
            'stadium' => $this->faker->unique()->city(),
        ];
    }
}
