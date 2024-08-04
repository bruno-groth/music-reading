<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookEdition extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'edition',
        'edition_date',
        'page_count',
    ];

    public function books()
    {
        return $this->belongsTo(Book::class);
    }
}
