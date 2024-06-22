<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactMessage extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'email', 'phone', 'service_id', 'message'];

    function service(){
        return $this->belongsTo(Service::class, 'service_id');
    }
}
