<?php

namespace App\Models;

use App\Traits\CustomDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentDetail extends Model
{
    use HasFactory, CustomDate;

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
