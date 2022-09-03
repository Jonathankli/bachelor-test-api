<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name' => fake()->name() . " Hotel",
            'stars' => fake()->numberBetween(2, 5),
            'description' => fake()->text(1000),
            'image' => fake()->imageUrl(640, 480, "Hotel"),
            'price' => fake()->numberBetween(200, 2000),
            'duration' => fake()->numberBetween(5, 16),
        ];
    }
}
