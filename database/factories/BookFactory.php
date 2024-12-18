<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition()
    {
        $genre = fake()->randomElement(['Fiction', 'Non-fiction', 'Mystery', 'Romance', 'Science Fiction', 'Fantasy']);

        return [
            'title' => fake()->sentence(3),
            'genre' => $genre,
            'language' => fake()->languageCode, // Gera um código de idioma ISO (PT -> portugal etc)
            'isbn' => fake()->unique()->isbn13, // Gera um ISBN único de length 13
            'published' => fake()->dateTimeBetween('-50 years', 'now'), // Data de publicação aleatória
            'observations' => fake()->sentence(10), // Comentários aleatórios
            'created_at' => now(), 
            'updated_at' => null,
        ];
    }
}
