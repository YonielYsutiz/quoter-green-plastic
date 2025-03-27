<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'upper_profile_amount', # perfil superior cantidad
        'upper_profile_reference_id',  # perfil superior referencia ID
        'lower_profile_amount', # perfil inferior cantidad
        'lower_profile_reference', # perfil inferior referencia ID
        'sleeping_quantity', # durmiente cantidad
        'sleeping_reference_id', # durmiente ID
        'number_of_screws',  # numero de tornillos
        'screws_type_id', # tipo de tornillos ID
        'nut_quantity', # cantidad de tuercas
        'nut_type_id', # tipo de tuerca id
        'washer_quantity', # cantidad de arandelas
        'washer_type_id', # tipo de arandelas
        'entries_quantity', # cantidad de entradas
        'resistance_static', # resistencia estatica KG
        'resistance_dynamic',  # resistencia dinamica KG
        'resistance_vacuum', # resistencia al vacio KG
    ];
}
