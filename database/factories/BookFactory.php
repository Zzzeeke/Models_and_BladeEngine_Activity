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
            'isbn' => rand(0,1) ? fake()->isbn10() : fake()->isbn13(),
            'title' => ucfirst(fake()->words(rand(1, 5), true)),
            'author' => fake()->name(),
            'description' => fake()->paragraph(2),
            'date_published' => fake()->date(),
        ];
    }
}
