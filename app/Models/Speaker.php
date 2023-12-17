<?php

namespace App\Models;

use App\Traits\CustomDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Speaker extends Model
{
    use HasFactory, CustomDate;

    protected $guarded = ['id'];

    public function course_schedule(): HasMany
    {
        return $this->hasMany(CourseSchedule::class);
    }
}
