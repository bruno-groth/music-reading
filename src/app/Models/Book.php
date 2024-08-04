<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "author_id",
        "publisher_id",
        "genre_id",       
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function bookEditions()
    {
        return $this->hasMany(BookEdition::class);
    }

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }
}
