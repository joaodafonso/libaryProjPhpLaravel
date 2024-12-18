<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $authors = Author::all();

        foreach ($authors as $author) {
            Book::factory(10)->create([
                'author_id' => $author->id, // Relaciona o autor
            ]);
        }
    }
}

