<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarmWelcome extends Model
{
    use HasFactory;

    protected $table = 'warm_welcomes';

    protected $fillable = [
        'titre',
        'description_grand',
        'description_petit'
    ];
}
