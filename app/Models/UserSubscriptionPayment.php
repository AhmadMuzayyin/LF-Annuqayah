<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserSubscriptionPayment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user_subscription(): BelongsTo
    {
        return $this->belongsTo(UserSubscription::class);
    }
}
