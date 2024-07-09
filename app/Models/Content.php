<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Concerns\HasUuid;

class Content extends Model {
    use HasFactory, HasUuid;

    protected $fillable = ['title', 'meta_description', 'meta_tags', 'content', 'page', 'status' ];
}
