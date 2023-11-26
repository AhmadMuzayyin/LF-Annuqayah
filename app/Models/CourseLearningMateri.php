<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseLearningMateri extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function course_learning_materi(): BelongsTo
    {
        return $this->belongsTo(CourseLearningMateri::class);
    }
}
