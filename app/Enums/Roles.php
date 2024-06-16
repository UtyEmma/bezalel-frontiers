<?php

namespace App\Enums;

enum Roles:string {

    case ADMIN = 'admin';
    case SUPERADMIN = 'super_admin';
    case EDITOR = 'editor';
    case AUTHOR = 'author';
    case SUBSCRIBER = 'subscriber';

    function label(){
        return match($this) {
            static::ADMIN => 'Administrator',
            static::SUPERADMIN => 'Super Administrator',
            static::AUTHOR => 'Author',
            static::EDITOR => 'Editor',
            static::SUBSCRIBER => 'Subscriber',
        };
    }

}
