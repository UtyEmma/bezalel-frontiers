<?php

namespace App\Enums;

enum Pages:string {

    case HOME = 'home';
    case ABOUT = 'about';

    function label(){
        return match ($this) {
            self::HOME => 'Home',
            self::ABOUT => 'About Us',
        };
    }

    function options(){
        return [
            self::HOME->value => self::HOME->label(),
            self::ABOUT->value => self::ABOUT->label(),
        ];
    }

}