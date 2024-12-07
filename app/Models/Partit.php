<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partit extends Model
{
    use HasFactory;

    protected $fillable = ['local', 'visitant', 'data', 'resultat'];
}
