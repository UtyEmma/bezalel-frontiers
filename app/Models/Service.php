<?php

namespace App\Models;

use App\Enums\Status;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model {
    use HasFactory, HasStatus, HasUuids;

    protected $fillable = ['name', 'content', 'slug', 'image', 'description', 'status', 'featured'];

    protected $cast = [
        'status' => Status::class,
        'featured' => 'boolean'
    ];

    protected $attributes = [
        'status' => Status::ACTIVE,
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

    function scopeIsFeatured($query){
        $query->where('featured', true);
    }

    function getRouteAttribute(){
        return route('services.details', ['service' => $this->slug]);
    }

}
