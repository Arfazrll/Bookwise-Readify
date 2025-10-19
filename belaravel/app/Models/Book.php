<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'book_code',
        'title',
        'slug',
        'author',
        'publication_year',
        'isbn',
        'language',
        'synopsis',
        'number_of_page',
        'status',
        'cover',
        'price',
        'category_id',
        'publisher_id',
    ];

    protected function casts(): array
    {
        return [
            'language' => BookLanguage::class,
            'status' => BookStatus::class,
        ];
    }
}
