<?php

namespace App\Traits;

use Carbon\Carbon;

trait CustomDate
{
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d F Y'); // Sesuaikan format sesuai kebutuhan
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d F Y'); // Sesuaikan format sesuai kebutuhan
    }
}
