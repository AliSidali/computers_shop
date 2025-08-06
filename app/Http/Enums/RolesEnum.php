<?php

namespace App\Http\Enums;

enum RolesEnum: string
{
    case Admin = 'Admin';
    case Vendor = 'Vendor';
    case User = 'user';
}
