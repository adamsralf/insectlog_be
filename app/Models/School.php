<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'street',
        'zip',
        'city',
        'country',
        'contact_name',
        'contact_phone',
        'contact_email',
        'password'
    ];
}
