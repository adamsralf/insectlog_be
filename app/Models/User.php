<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id'
    ];

    /*
     * Relations
     */
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(Log::class);
    }
}
