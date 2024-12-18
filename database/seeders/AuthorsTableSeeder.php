<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Author::factory(10)->create(); // Cria 10 autores fictícios
    }
}

