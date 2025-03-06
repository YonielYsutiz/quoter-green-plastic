<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeScrews extends Model
{
    use HasFactory;
    protected $table = 'type_screws';
    protected $fillable = ['name', 'dimensions'];
}
