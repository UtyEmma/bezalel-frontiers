<?php

namespace App\Models;

use App\Enums\Status;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Client extends Model {
    use HasFactory, HasStatus, SoftDeletes;

    protected $fillable = ['name', 'website', 'image', 'status', 'featured'];
    protected $casts = [
        'status' => Status::class,
        'featured' => 'boolean'
    ];

    function getLogoAttribute(){
        if(file_exists('storage/'.$this->image)) return asset('storage/'.$this->image);
        if(file_exists($this->image)) return asset($this->image);
        return $this->image;
    }

}
