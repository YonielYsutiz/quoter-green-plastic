<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeNut extends Model
{
    use HasFactory;
    protected $table = 'type_nuts';
    protected $fillable = ['name', 'dimensions'];
}
