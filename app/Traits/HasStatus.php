<?php

namespace App\Traits;

use App\Enums\Status;

trait HasStatus {

    function scopeStatus($query, Status $status) {
        $query->where('status', $status);
    }

}
