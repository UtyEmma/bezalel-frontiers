<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model {
    use HasFactory, HasUuids;

    protected $fillable = ['question', 'answer', 'status'];

    protected $casts = [
        'status' => Status::class
    ];

    protected $attributes = [
        'status' => Status::ACTIVE
    ];

}
