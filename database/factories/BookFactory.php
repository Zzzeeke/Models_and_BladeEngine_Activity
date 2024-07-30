<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => fake()->isbn(),
            'title' => fake()->title(),
            'author' => fake()->author(),
            'description' => fake()->paragraph(),
            'date_published' => fake()->date_publish(),
            // 'remember_token' => Str::random(10),
        ];
    }
}
