<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author_id', 'genre', 'language', 'isbn', 'published', 'observations'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
