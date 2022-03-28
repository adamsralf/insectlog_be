<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Insect extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
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
    public function pictures(): HasMany
    {
        return $this->hasMany(InsectPicture::class);
    }
}
