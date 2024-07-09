<?php

namespace App\Models;

use App\Enums\Pages;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model {
    use HasFactory, HasUuids;

    protected $fillable = ['content', 'page', 'status' ];

    protected $casts = [
        'content' => 'array',
        'page' => Pages::class,
        'status' => Status::class
    ];

    protected $attributes = [
        'status' => Status::ACTIVE
    ];

    function render($section, $default = null, $key = null, $item = null) {
        $section = $this->content[$section];
        if(!is_array($section)) return $section; 

        $section = collect($section);

        if($content = $section->where('type', $key)->first()) {
            // dd($content);
            // return $default;
            if(isset($content['data']['status']) && $content['data']['status'] && $content['data'][$item]) {
                $content = preg_replace('/\*\*(.*?)\*\*/', '<span>$1</span>', $content['data'][$item]);
                return $content;
            };
            return $default;
        };

        return $default;
    } 
}
