<?php

namespace App\Enums;

enum Pages:string {

    case HOME = 'home';
    case ABOUT = 'about';
    case CONTACT = 'contact';
    case SERVICES = 'services';
    case BLOG = 'blog';
    case TEAM = 'teams';
    case FAQS = 'faqs';

    function label(){
        return match ($this) {
            self::HOME => 'Home',
            self::ABOUT => 'About Us',
            self::CONTACT => 'Contact Us',
            self::SERVICES => 'Services',
            self::BLOG => 'Blog',
            self::TEAM => 'Team',
            self::FAQS => 'Frequently Asked Questions',
        };
    }

    static function options(){
        return [
            self::HOME->value => self::HOME->label(),
            self::ABOUT->value => self::ABOUT->label(),
            self::CONTACT => self::CONTACT->label(),
            self::SERVICES => self::SERVICES->label(),
            self::BLOG => self::BLOG->label(),
            self::TEAM => self::TEAM->label(),
            self::FAQS => self::FAQS->label(),
        ];
    }

    static function routes(){
        return [
            route('home') => self::HOME->label(),
            route('about') => self::ABOUT->label(),
            route('contact') => self::CONTACT->label(),
            route('services') => self::SERVICES->label(),
            route('posts') => self::BLOG->label(),
            route('teams') => self::TEAM->label(),
            route('faqs') => self::FAQS->label(),
        ];
    }

    function route(){
        return match ($this) {
            self::HOME => route('home'),
            self::ABOUT => route('about'),
            self::CONTACT => route('contact'),
            self::SERVICES => route('services'),
            self::BLOG => route('posts'),
            self::TEAM => route('teams'),
            self::FAQS => route('faqs'),
        };
    }

}