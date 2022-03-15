<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'Dni_client',
        'Nomcognoms',
        'Edat',
        'Telèfon',
        'Adreça',
        'Ciutat',
        'País',
        'Email',
        'Tipustargeta',
        'Númerotargeta'
    ];
}
