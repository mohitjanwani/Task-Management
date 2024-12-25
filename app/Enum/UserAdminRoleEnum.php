<?php

namespace App\Enum;

enum UserAdminRoleEnum:string
{
    case ADMIN = 'admin';
    case SUBADMIN = 'subadmin';
    case USER = 'user';
}
