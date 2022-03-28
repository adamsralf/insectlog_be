<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
