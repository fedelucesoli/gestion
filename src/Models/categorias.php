<?php

namespace Src\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
  protected $table = "categorias";
  protected $fillable = ['nombre', 'valor'];

}
