<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apartament extends Model
{
    use HasFactory;
    protected $fillable = [
        'Codi_unic',
        'Referenciacatastral',
        'Ciutat',
        'Barri',
        'Nomcarrer',
        'Numerocarrer',
        'Pis',
        'Nombrellits',
        'Nombrehabitacions',
        'Ascensor',
        'Calefaccio',
        'Airecondicionat'
    ];
}
