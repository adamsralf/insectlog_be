<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'insect_id',
        'user_id',
        'device_id',
        'latitude',
        'longitude',
        'altitude'
    ];

    /*
     * Relations
     */
    public function insect(): BelongsTo
    {
        return $this->belongsTo(Insect::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
