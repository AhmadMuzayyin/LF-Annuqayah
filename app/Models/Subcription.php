<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcription extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user_subscription(): HasMany
    {
        return $this->hasMany(UserSubscription::class);
    }
}
