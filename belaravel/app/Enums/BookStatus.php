<?php

namespace App\Enums;

enum BookStatus: string
{
    case AVAIBLE = "Tersedia";
    case UNAVAIBLE = "Tidak Tersedia";
    case LOAN = "Dipinjam";
    case Lost = "Hilang";
    case Damaged = "Rusak";

    public static function options (): array 
    {
        return collect(self::cases())->map(fn($item) => [
            'value' => $item->value,
            'label' => $item->name,
        ])->values()->toArray();
    }
}