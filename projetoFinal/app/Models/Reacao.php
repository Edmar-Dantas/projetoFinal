<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reacao extends Model
{
    protected $fillable = [
        'plotTwist',
        'emocionante',
        'medo',
        'amei',
        'nojo'
    ];
}
