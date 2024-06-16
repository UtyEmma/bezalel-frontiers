<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia {
    use HasFactory, HasStatus, InteractsWithMedia;

    protected $fillable = ['heading', 'subheading', 'action', 'link', 'title', 'status'];

    function getImageAttribute(){
        return $this->getFirstMediaUrl();
    }

}
