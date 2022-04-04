<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    protected $fillable = [
        'title',
        'lang_file',
        'author'
    ];

    public function insects(): HasMany
    {
        return $this->hasMany(Insect::class);
    }
}
