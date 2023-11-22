<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Library extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public  function  author(): BelongsTo
    {
        return $this->belongsTo(AuthorLibrary::class, 'author_library_id');
    }
}
