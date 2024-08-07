<?php

namespace App\Models;

use App\Enums\Status;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model {
    use HasFactory, SoftDeletes, HasStatus;

    protected $fillable = ['name', 'company', 'role', 'message', 'featured', 'status'];

    protected $casts = [
        'status' => Status::class,
        'featured' => 'boolean'
    ];

    protected $attributes = [
        'status' => Status::ACTIVE
    ];


}
