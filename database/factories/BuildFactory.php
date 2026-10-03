<?php

namespace Database\Factories;

use App\Models\Build;
use App\Models\Resonator;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Build>
 */
class BuildFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'resonator_id' => Resonator::factory(),
            'title' => fake()->words(3, true),
            'level' => 90,
            'sequence' => 0,
            'weapon_name' => null,
            'echo_costs' => [4, 3, 3, 1, 1],
            'notes' => null,
            'status' => Build::STATUS_DRAFT,
        ];
    }

    public function published(): static
    {
        return $this->state(fn () => ['status' => Build::STATUS_PUBLISHED]);
    }
}
