<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;

use App\Items;
use App\Image;

class WebController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['items'] = Items::all();

        return view('inicio', $data);
    }
    public function item($id)
    {
      $data['item'] = Items::find($id);
      if(is_null($data['item'])){
        return redirect()->route('inicio');
      }
      $latlng= $data['item']->lat . ', '. $data['item']->lng;
      $config = array();
      $config['center'] = $latlng;
      $config['map_width'] = '100%';
      $config['map_height'] = 200;
      $config['zoom'] = 15;
      $marker = array();
      $marker['position'] = $latlng;
      Gmaps::add_marker($marker);
      Gmaps::initialize($config);

      $data['map'] = Gmaps::create_map();

        return view('web.itemficha', $data);
    }
}
