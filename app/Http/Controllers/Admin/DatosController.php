<?php

namespace App\Http\Controllers\Admin;

use App\Datos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data['datos'] = Datos::find($id);
        return $data;
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Datos $datos)
    {
        //
    }


    public function edit(Datos $datos)
    {
        //
    }


    public function update(Request $request, Datos $datos)
    {
        //
    }

    public function destroy(Datos $datos)
    {
        //
    }
}
