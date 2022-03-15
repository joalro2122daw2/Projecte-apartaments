<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'Dni_client',
        'Nom i cognoms',
        'Edat',
        'Telèfon',
        'Adreça',
        'Ciutat',
        'Pis',
        'Email',
        'Tipus de targeta',
        'Número de targeta'
    ];
}
