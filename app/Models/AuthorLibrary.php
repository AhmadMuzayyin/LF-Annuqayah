<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AuthorLibrary extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function library(): HasMany
    {
        return $this->hasMany(Library::class);
    }
}
