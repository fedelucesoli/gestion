<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;

use App\Items;
use App\Image;
use App\Logic\MapasRepository;

class WebController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
      $data['items'] = Items::activo()->get();
      $data['newsletter'] = true;

      return view('inicio', $data);

    }

    public function categoria($slug)
    {
      if (!isset($slug)) {
        return redirect()->route('inicio');
      }
      $data['items'] = Items::activo()->where('categoria', $slug)->get();
      if (!$data['items']) {
        return redirect()->route('inicio');
      }
      $data['newsletter'] = true;
      return view('inicio', $data);
    }

    public function indexmapa(){
      $data['items'] = Items::all();
      $data['newsletter'] = true;

      // $latlng= $data['item']->lat . ', '. $data['item']->lng;

      $config = array();
      $config['center'] = '-35.1870349, -59.0949762';
      $config['map_width'] = '100%';
      $config['map_height'] = 800;
      $config['zoom'] = 12;

      foreach ($data['items'] as $item) {
        $latlng= $item->lat . ', '. $item->lng;
        $marker = array();
        $marker['position'] = $latlng;
        $marker['infowindow_content'] = $item->titulo;
        $marker['animation'] = 'DROP';
        $marker['icon'] = '/assets/img/marker.png';
        Gmaps::add_marker($marker);
      }

      Gmaps::initialize($config);

      $data['map'] = Gmaps::create_map();

      return view('web.indexmapa', $data);
    }

    public function item($slug){

      $data['item'] = Items::where('slug','=', $slug)->first();
      $data['itemrelacionados'] = Items::where('categoria', $data['item']->categoria)
                                  ->where('id', '!=', $data['item']->id)
                                  ->limit(3)
                                  ->get();

      if(is_null($data['item'])){
        return redirect()->route('inicio');
      }

      $latlng= $data['item']->lat . ', '. $data['item']->lng;
      $config = array();
      $config['center'] = $latlng;
      $config['map_width'] = '100%';
      $config['map_height'] = 400;
      $config['zoom'] = 14;
      $config['disableMapTypeControl'] = true;
      $config['disableDefaultUI'] = true;
      $marker = array();
      $marker['position'] = $latlng;
      $marker['icon'] = '/assets/img/marker.png';
      Gmaps::add_marker($marker);
      Gmaps::initialize($config);

      $data['map'] = Gmaps::create_map();

      return view('web.ficha', $data);
    }

    public function itemAjax($id){

      $data['item'] = Items::find($id);
      $data['itemrelacionados'] = Items::where('categoria', $data['item']->categoria)
                                  ->where('id', '!=', $data['item']->id)
                                  ->limit(3)
                                  ->get();

      if(is_null($data['item'])){
        return redirect()->route('inicio');
      }
      $latlng= $data['item']->lat . ', '. $data['item']->lng;
      $config = array();
      $config['center'] = $latlng;
      $config['map_width'] = '100%';
      $config['map_height'] = 350;
      $config['zoom'] = 15;
      $marker = array();
      $marker['position'] = $latlng;
      Gmaps::add_marker($marker);
      Gmaps::initialize($config);

      $data['map'] = Gmaps::create_map();

      return view('web.itemficha', $data);
    }
}
