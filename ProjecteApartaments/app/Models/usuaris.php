<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuaris extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom i cognoms',
        'Email',
        'Contrasenya',
        'Tipus',
        'Darrera hora d entrada',
        'Darrera hora de sortida'
    ];
}
