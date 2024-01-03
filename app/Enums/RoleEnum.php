<?php

namespace App\Enums;

enum RoleEnum: string
{
    case ADMIN = 'admin';
    case STAFF = 'staff';
    case COMPANY = 'company';
    case STUDENT = 'student';
    case ALUMNI = 'alumni';
}
