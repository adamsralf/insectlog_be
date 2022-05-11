<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Insect extends Model
{
    use HasFactory;

    protected $fillable = [
        'species_name'
    ];

    /**
     * Relations
     */
    public function infos(): HasMany
    {
        return $this->hasMany(InsectInfo::class);
    }

    public function getInfosByLang(string $lang): HasMany
    {
        return $this->hasMany(InsectInfo::class)->where('lang', $lang);
    }
}
