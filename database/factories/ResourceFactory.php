<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
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
            'name' => fake()->randomElement(['graba','finesand','balas']),
            'type' => fake()->randomElement(['sand','rock']),
            'price' => fake()->numberBetween(100,200),
            'quantity' => fake()->numberBetween(10,20),
        ];
    }
}
