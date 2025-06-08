<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    protected $fillable = ['number', 'brand']; //Campos que se van a asignacion masiva:
}
