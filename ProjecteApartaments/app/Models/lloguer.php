<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lloguer extends Model
{
    use HasFactory;
    protected $fillable = [
        'Dni_client',
        'Codi_únic de l apartament',
        'Data d inici del lloguer',
        'Hora d inici del lloguer',
        'Data de finalització del lloguer',
        'Hora de finalització del lloguer',
        'Lloc de lliurament de les claus',
        'Lloc de devolució de les claus',
        'Preu per dia',
        'Dipòsit',
        'Quantitat del dipòsit',
        'Tipus d assegurança',
        'Primary_key'
    ];
}
