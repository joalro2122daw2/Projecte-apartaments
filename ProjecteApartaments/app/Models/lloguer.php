<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lloguer extends Model
{
    use HasFactory;
    protected $fillable = [
        'Dni_client',
        'Codi_unic',
        'Datainici',
        'Horainici',
        'Datafi',
        'Horafi',
        'Lloclliuclaus',
        'Llocdevclaus',
        'Preudia',
        'Diposit',
        'Quantdiposit',
        'Tipusasseguranca'
    ];
}
