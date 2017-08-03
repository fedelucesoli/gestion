<?php

namespace App\Logic;


use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;


class MapasRepository
{
  function mapa($configuracion){

    $config = array();
    // Todo Direccion
    $config['center'] = '-35.1870349, -59.0949762';
    // Todo Tamaño
    $config['map_width'] = '100%';
    $config['map_height'] = 500;
    $config['zoom'] = 15;

    // Todo Acciones

    $config['onclick'] = '
    createMarker_map({ map: map, position:event.latLng });
    document.getElementById("lat").value = event.latLng.lat();
    document.getElementById("lng").value = event.latLng.lng();
    ';

    Gmaps::initialize($config);
    // Return algo

  }
}
