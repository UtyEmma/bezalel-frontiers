<?php

namespace App\Models;

use App\Enums\Status;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Date;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia {
    use HasFactory, SoftDeletes, InteractsWithMedia, HasStatus;

    protected $fillable = ['title', 'slug', 'author_id', 'content', 'published_at', 'excerpt', 'tags', 'description', 'status'];

    protected function casts() {
        return [
            'tags' => 'array',
            'status' => Status::class
        ];
    }

    function author(){
        return $this->belongsTo(User::class, 'author_id');
    }

    function getImageAttribute(){
        return $this->getFirstMediaUrl('posts');
    }

    function getRouteAttribute(){
        return route('posts.details', ['post' => $this->slug]);
    }

    function getPublishingDateFormat(){
        return Date::parse($this->published_at)->format('jS F Y');
    }


}
