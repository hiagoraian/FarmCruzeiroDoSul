<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equine extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'name',
        'race',
        'father',
        'mother',
        'description',
        'age'

    ];
}
