<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resonator>
 */
class ResonatorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->firstName(),
            'element' => fake()->randomElement(['Aero', 'Electro', 'Fusion', 'Glacio', 'Havoc', 'Spectro']),
            'weapon_type' => fake()->randomElement(['Broadblade', 'Sword', 'Pistols', 'Gauntlets', 'Rectifier']),
            'rarity' => fake()->randomElement([4, 5]),
            'best_echoes' => 'Echo',
            'image' => 'placeholder.jpg',
        ];
    }
}
