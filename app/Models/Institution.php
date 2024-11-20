<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    // Definir los campos asignables (fillable)
    protected $fillable = [
        'name',
        'description',
    ];
}
