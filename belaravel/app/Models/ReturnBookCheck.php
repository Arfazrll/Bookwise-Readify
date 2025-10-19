<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnBookCheck extends Model
{
    protected $fillable = [
        'return_book_id',
        'condition',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'condition' => ReturnBookStatus::class,
        ];
    }

    public function returnBook(): BelongsTo
    {
        return $this->belongsTo(ReturnBook::class);
    }
}
