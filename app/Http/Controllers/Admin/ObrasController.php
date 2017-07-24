<?php

namespace App\Http\Controllers\Admin;

use App\Items;
use App\Image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;
use App\Logic\ImageRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str as Str;

class ObrasController extends Controller{

    public function index(){
      $data['items'] = Items::all();
      // $request->session()->put('mensaje', 'fede');
      session(['mensaje' => 'value']);
      return view('admin.listado-obras', $data);
      // TODO sacar datos para mostrar

    }

    public function create(){

      $config = array();
      $config['center'] = '-35.1870349, -59.0949762';
      $config['map_width'] = '100%';
      $config['map_height'] = 500;
      $config['zoom'] = 15;
      $config['onclick'] = '
      createMarker_map({ map: map, position:event.latLng });
      document.getElementById("lat").value = event.latLng.lat();
      document.getElementById("lng").value = event.latLng.lng();
      ';

      Gmaps::initialize($config);
      $data['map'] = Gmaps::create_map();
      return view('admin.itemadd', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      // TODO estado y detalles en model nuevo
      $item = new Items;
      $item->titulo = $request->titulo;
      $item->descripcion = $request->descripcion;
      $item->categoria = $request->categoria;
      $item->fecha_inicio = $request->fecha_inicio;
      $item->fecha_fin = $request->fecha_fin;
      $item->slug= Str::slug($request->titulo);
      $item->lat = $request->lat;
      $item->lng = $request->lng;

      if ($item->save()) {
        $data['id_item'] = $item->id;
        return redirect()->route('admin.item.image', $data);
      }else{
        return view('admin.itemadd', $data);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $items){

      $data['item'] = Items::where('slug','=', $slug)->firstOrFail();
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

      return view('web.itemficha', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $items){
      if (isset($id)) {
        $data['item'] = Items::where('id','=', $id)->firstOrFail();
        $data['itemrelacionados'] = Items::where('categoria', $data['item']->categoria)
                                    ->where('id', '!=', $data['item']->id)
                                    // ->limit(3)
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

        $marker['draggable'] = true;
        $config['ondragend'] = '
        createMarker_map({ map: map, position:event.latLng });
        document.getElementById("lat").value = event.latLng.lat();
        document.getElementById("lng").value = event.latLng.lng();
        ';
        Gmaps::add_marker($marker);
        Gmaps::initialize($config);

        $data['map'] = Gmaps::create_map();
        return view('admin.itemEditar', $data);

      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Items $items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $items)
    {
        //
    }
}
