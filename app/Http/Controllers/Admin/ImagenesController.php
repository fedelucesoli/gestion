<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Logic\ImageRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class ImagenesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }


    public function create()
    {
        return "fede";
    }

    protected $image;

    public function upload(Request $request, ImageRepository $imageRepository){

      $this->image = $imageRepository;

      $photo = Input::all();

      $response = $this->image->upload($photo);

      return $response;
    }


    public function edit(Datos $datos)
    {
        //
    }

    public function destroy(Datos $datos)
    {
        //
    }
}
