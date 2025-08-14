<?php

namespace App\Enums;

enum LanguageEnum: string
{
    case ar = 'العربية';
    case fr = 'francais';

    public static function toArray()
    {
        return array_reduce(self::cases(), function ($newArray, $case) {
            $newArray[$case->name] = $case->value;
            return $newArray;
        }, []);
    }
}
