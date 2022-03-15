<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apartament extends Model
{
    use HasFactory;
    protected $fillable = [
        'Codi_unic',
        'Referencia castral',
        'Ciutat',
        'Barri',
        'Nom del carrer',
        'Numero del carrer',
        'Pis',
        'Nombre de llits',
        'Nombre d habitacions',
        'Ascensor',
        'Calefaccio',
        'Aire condicionat'
    ];
}
