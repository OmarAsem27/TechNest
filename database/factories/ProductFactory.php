<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [
            'name' => fake()->word,
            'description' => fake()->realTextBetween(20, 30),
            'price' => random_int(0, 40000),
            'created_at' => fake()->dateTimeBetween('-4 years', 'now'),
        ];
    }
}
