<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia {
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['name', 'role', 'bio', 'instagram', 'facebook', 'linkedin', 'twitter', 'status'];

    protected $casts = [
        'status' => Status::class
    ];

    protected $attributes = [
        'status' => Status::ACTIVE
    ];

    function getImageAttribute(){
        return $this->getFirstMediaUrl('teams');
    }
}
