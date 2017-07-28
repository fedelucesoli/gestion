<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    //
    protected $fillable = [
      'titulo',
      'foto',
      'descripcion',
      'fecha_inicio',
      'fecha_fin',
      'lng',
      'lat'
    ];
    public function images()
    {
        return $this->hasMany('App\Image', 'item_id');
    }
    public function scopeActivo($query)
   {
       return $query->where('activo', 1);
   }

}
