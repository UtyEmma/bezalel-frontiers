<?php

namespace App\Models;

use App\Enums\Status;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Service extends Model implements HasMedia {
    use HasFactory, InteractsWithMedia, HasStatus;

    protected $fillable = ['name', 'content', 'slug', 'description', 'status', 'featured'];

    protected $cast = [
        'status' => Status::class,
        'featured' => 'boolean'
    ];

    protected $attributes = [
        'status' => Status::ACTIVE,
    ];

    function scopeIsFeatured($query){
        $query->where('featured', true);
    }

    function getImageAttribute(){
        return $this->getFirstMediaUrl('services');
    }

    function getRouteAttribute(){
        return route('services.details', ['service' => $this->slug]);
    }

}
