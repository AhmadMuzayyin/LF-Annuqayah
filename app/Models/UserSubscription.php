<?php

namespace App\Models;

use App\Traits\CustomDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserSubscription extends Model
{
    use HasFactory, CustomDate;

    protected $guarded = ['id'];

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subcription::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function user_subscription_payment(): HasMany
    {
        return $this->hasMany(UserSubscriptionPayment::class);
    }
}
