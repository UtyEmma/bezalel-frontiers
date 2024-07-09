<?php

if(!function_exists('superAssets')) {
    function superAssets ($value) {
        if(file_exists("storage/{$value}")) return asset("storage/{$value}");
        if(file_exists($value)) return asset($value);
        return $value;
    }
}