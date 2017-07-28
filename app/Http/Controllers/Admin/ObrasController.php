<?php

namespace App\Http\Controllers\Admin;

use App\Items;
use App\Categoria;
use App\Image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;
// use Intervention\Image\Facades\Image as ;
use App\Logic\ImageRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str as Str;

use Illuminate\Contracts\Validation\Validator;

class ObrasController extends Controller{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index(){
      $data['items'] = Items::all();
      return view('admin.obras.index', $data);
      // TODO sacar datos para mostrar

    }

    public function create(){
      $data['action'] = route("admin.obras.store");
      $data['categorias'] = Categoria::all();

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

      return view('admin.obras.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ImageRepository $imageRepository){

      $rules = array(
        'titulo'            => 'required',
        'descripcion'       => 'required',
        'categoria'         => 'required',
      );

      $validator = $this->validate($request, $rules);

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

        foreach ($request->imagenes as $photo) {
            $request['file'] = $photo;
            $request['id_item'] = $item->id;
            $response = $imageRepository->upload($request);
        }
        $request->session()->flash('mensaje', 'COrrecto todo');
        return redirect()->route('admin.obras.index');

      }else{
        return view('admin.itemadd', $data);
      }

    }


    public function show($id){

      $data['item'] = Items::where('id','=', $id)->firstOrFail();
      $data['itemrelacionados'] = Items::where('categoria', $data['item']->categoria)
                                  ->where('id', '!=', $data['item']->id)
                                  ->limit(3)
                                  ->get();

      if(is_null($data['item'])){
        return redirect()->route('admin.obras.index');
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

      return view('admin.obras.show', $data);
    }


    public function edit(Items $items){
      if (isset($id)) {
        $data['item'] = Items::where('id','=', $id)->firstOrFail();
        $data['itemrelacionados'] = Items::where('categoria', $data['item']->categoria)
                                    ->where('id', '!=', $data['item']->id)
                                    // ->limit(3)
                                    ->get();
        if(is_null($data['item'])){
          return redirect()->route('admin');
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
        return view('admin.obras.edit', $data);

      }
    }


    public function update(Request $request, Items $items)
    {
        //
    }

    public function estado(Request $request, Items $items)
    {
      $item = Items::find($request->input('id'));
      if ($item) {
        if ($item->activo) {
          $estado = 0;
        }else{
          $estado = 1;
        }
        $item->activo = $estado;
        $item->save();
        $request->session()->flash('status', 'Categoria Eliminada');
        $data['status'] = "mal";
        $data['estado'] = $estado;

      }
      $data['status'] = "bien";
      return json_encode($data);
      // return redirect('dashboard')->with('mensaje', 'Obra publicada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $obra = Items::find($request->input('id'));
      if ($obra) {
        $obra->delete();
        $request->session()->flash('status', 'Categoria Eliminada');
      }
      $data['status'] = "Eliminado";
      return json_encode($data);
    }
}
