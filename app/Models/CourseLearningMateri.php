<?php

namespace App\Models;

use App\Traits\CustomDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseLearningMateri extends Model
{
    use HasFactory, CustomDate;

    protected $guarded = ['id'];

    public function course_learning_materi(): BelongsTo
    {
        return $this->belongsTo(CourseLearningMateri::class);
    }
}
