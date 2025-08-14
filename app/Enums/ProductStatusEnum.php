<?php

namespace App\Enums;

enum ProductStatusEnum: string
{
    case Draft = 'Draft';
    case Published = 'Published';

    public static function labels()
    {
        return [
            self::Draft->value => __('messages.draft'),
            self::Published->value => __('messages.publish'),
        ];
    }

    public static function colors()
    {
        return [
            'gray' => self::Draft->value,
            'success' => self::Published->value
        ];
    }
}
