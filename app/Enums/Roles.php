<?php

namespace App\Enums;

enum Roles:string {

    case ADMIN = 'admin';
    case SUPERADMIN = 'super_admin';
    case EDITOR = 'editor';
    case AUTHOR = 'author';
    case SUBSCRIBER = 'subscriber';

}
