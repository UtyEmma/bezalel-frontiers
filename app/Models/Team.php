<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia {
    use HasFactory, InteractsWithMedia, HasUuids;

    protected $fillable = ['name', 'role', 'bio', 'image', 'instagram', 'facebook', 'linkedin', 'twitter', 'status'];

    protected $casts = [
        'status' => Status::class
    ];

    protected $attributes = [
        'status' => Status::ACTIVE
    ];

    protected function image(): Attribute {
        return Attribute::make(
            get: function(string $value) {
                if(file_exists('storage/'.$value)) return asset('storage/'.$value);
                if(file_exists($value)) return asset($value);
                return $value;
            },
        );
    }
    
}
