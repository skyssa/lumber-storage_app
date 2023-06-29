<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wood>
 */
class WoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'name' => fake()->randomElement(['mahogany','coconut','germilina']),
            'type' => fake()->randomElement(['4x4','1x3','2x2','2x3','2x4']),
            'price' => fake()->numberBetween(100,1000),
            'quantity' => fake()->numberBetween(10,20),
        ];
    }
}
