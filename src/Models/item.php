<?php

namespace Src\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $table = "items";
  protected $fillable = [
    'titulo',
    'descripcion',
    'foto',
    'fecha_inicio',
    'categoria_id',
    'lng',
    'lat',
    'created_at',
    'updated_at'
    ];
  public function categoria()
  {
    return $this->hasOne('Src\Models\Categorias', 'id', 'categoria_id');
  }
}
