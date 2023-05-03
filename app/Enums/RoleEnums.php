<?php

namespace App\Enums;

enum RoleEnums : string
{
    case MASTER_ADMIN = 'Master Admin';
    case ADMIN = 'Admin';
    case CARE_CENTER_MANAGER = 'Care Center Manager';
}
