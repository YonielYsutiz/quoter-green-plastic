<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeWasher extends Model
{
    use HasFactory;
    protected $table = 'type_washers';
    protected $fillable = ['name', 'dimensions'];
}
