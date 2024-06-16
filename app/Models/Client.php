<?php

namespace App\Models;

use App\Enums\Status;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Client extends Model implements HasMedia {
    use HasFactory, HasStatus, SoftDeletes, InteractsWithMedia;

    protected $fillable = ['name', 'website', 'status', 'featured'];

    protected $casts = [
        'status' => Status::ACTIVE,
        'featured' => 'boolean'
    ];

    function getLogoAttribute(){
        return $this->getFirstMediaUrl();
    }

}
