<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
  protected $fillable = [
    'id_item',
    'tipo',
    'nombre',
    'valor'
  ];
}
