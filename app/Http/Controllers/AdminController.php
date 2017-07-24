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
        return view('admin.dashboard', $data);

    }

    public function itemsAdd(Request $request){



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

    public function itemsEditar($id){

    }
}
