<?php

namespace App\Models;

use App\Enums\Status;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Date;

class Post extends Model {
    use HasFactory, SoftDeletes, HasStatus, HasUuids;

    protected $fillable = ['title', 'slug', 'author_id', 'image', 'content', 'published_at', 'excerpt', 'tags', 'description', 'status'];

    protected function casts() {
        return [
            'tags' => 'array',
            'status' => Status::class
        ];
    }

    protected function image(): Attribute {
        return Attribute::make(
            get: function(string $value) {
                if(file_exists('storage/'.$value)) return asset('storage/'.$value);
                if(file_exists($value)) return asset($value);
                return $value;
            },
        );
    }

    function author(){
        return $this->belongsTo(User::class, 'author_id');
    }

    function getRouteAttribute(){
        return route('posts.details', ['post' => $this->slug]);
    }

    function getPublishingDateAttribute(){
        return Date::parse($this->published_at)->format('jS F Y');
    }


}
