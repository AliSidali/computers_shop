<?php

namespace App\Http\Enums;

enum LanguageEnum: string
{
    case fr = 'francais';
    case ar = 'العربية';

    public static function toArray()
    {
        return array_reduce(self::cases(), function ($newArray, $case) {
            $newArray[$case->name] = $case->value;
            return $newArray;
        }, []);
    }
}
