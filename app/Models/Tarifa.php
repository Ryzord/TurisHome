<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    protected $fillable = [
    'nombre_tarifa',
    'tarifa_aplicada',
    'coste_tarifa'];

}
