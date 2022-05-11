<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InsectInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'insect_id',
        'lang',
        'name',
        'lifespan',
        'size',
        'food',
        'species',
        'habitat',
        'enemies',
        'description',
        'indicator'
    ];

    /*
     * Relations
     */
    public function insect(): BelongsTo
    {
        return $this->belongsTo(Insect::class);
    }

    public function pictures(): HasMany
    {
        return $this->hasMany(InsectPicture::class);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(Log::class);
    }
}
