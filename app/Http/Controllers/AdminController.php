<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;
use App\Logic\ImageRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str as Str;

use App\Items;
use App\Image;


class AdminController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $data['items'] = Items::all();

        // return view('admin.dashboard', $data);
        return view('admin.listado-obras', $data);

    }

    public function listadoobras(){
      $data['items'] = Items::all();
      return view('admin.listado-obras', $data);
    }

    public function itemsCreate(){

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



    public function itemsAdd(Request $request){
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

    public function uploadImages(Request $request){
      if (!isset($request->id_item)) {
        return redirect()->route('admin.dashboard');
      }
      $data['id_item'] = $request->id_item;
      return view('admin.itemaddimg', $data);


    }

    protected $image;
    public function postUpload(Request $request, ImageRepository $imageRepository){

      $this->image = $imageRepository;
      $photo = Input::all();
      $response = $this->image->upload($photo);
      return $response;

    }
}
