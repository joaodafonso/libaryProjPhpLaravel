<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('title', 150);
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade'); // Relacionamento
            $table->string('genre', 100);
            $table->string('language', 50);
            $table->string('isbn', 13)->unique();
            $table->date('published');
            $table->string('observations', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
};
