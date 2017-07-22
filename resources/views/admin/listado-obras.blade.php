@extends('layouts.admin')

@section('content')


      <div class="col-md-12" style="margin: 75px 0 25px 0;">
        <h1>Listado de Obras</h1>
      </div>
      <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <th><a href="">{{$item->titulo}}</a></th>
              <th class="info">{{$item->categoria}}</th>
              <th class="info">{{$item->activo}}</th>
              <th>Editar - Eliminar</th>
            </tr>
          @endforeach

        </tbody>
      </table>
      </div>

@endsection
