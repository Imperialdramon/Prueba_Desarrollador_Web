<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    protected $fillable = ['marca', 'modelo', 'año','dueño','precio'];

    public $timestamps = false;
}
