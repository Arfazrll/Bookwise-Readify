<?php

namespace App\Enums;

enum findPaymentStatus: string
{
    case PENDING = "Tertunda";
    case SUCCESS = "Sukses";
    case FAILED = "Gagal";

    public static function option (): array
    {
        return collect(self::cases())->map(fn($item) => [
            'value' => $item->value,
            'label' => $item->name,
        ])->values()->toArray();
    }
}