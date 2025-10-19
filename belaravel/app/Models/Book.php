<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function stock(): HasOne
    {
        return $this->hasOne(BookStock::class);
    }

    public function loands(): HasMany
    {
        return $this->hasMany(Loan::class);
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }
  
}
