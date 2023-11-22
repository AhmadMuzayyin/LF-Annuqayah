<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user_course_payment(): BelongsTo
    {
        return $this->belongsTo(UserCoursePayment::class);
    }
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
