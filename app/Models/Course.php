<?php

namespace App\Models;

use App\Traits\CustomDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Course extends Model
{
    use HasFactory, HasTrixRichText, CustomDate;

    protected $guarded = [];

    public function course_category(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class);
    }

    public function course_learning_materi(): BelongsTo
    {
        return $this->belongsTo(CourseLearningMateri::class);
    }

    public function quiz(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }

    public function user_course(): HasMany
    {
        return $this->hasMany(UserCourse::class);
    }

    public function user_course_payment(): HasMany
    {
        return $this->hasMany(UserCoursePayment::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($post) {
            $post->trixRichText->each->delete();
            $post->trixAttachments->each->purge();
        });
    }
}
