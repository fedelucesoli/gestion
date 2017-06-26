<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
