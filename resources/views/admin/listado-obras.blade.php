@extends('layouts.admin')

@section('content')


      <div class="col-md-12" style="margin: 75px 0 25px 0;">
        <h1>Listado de Obras</h1>
        <a href="{{route('admin.item.add')}}" class="btn"> Agregar Obra</a>
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
              <th class="info">

                @if ($item->activo)
                  <i class="fa fa-eye" style="color:green"></i>
                @else
                  <i class="fa fa-eye-slash" style="color:red"></i>
                @endif</th>
              <th><a href="{{route('admin.item.editar', ['id' => $item->id])}}">Editar</a> - <a href="#">Eliminar</a></th>
            </tr>
          @endforeach

        </tbody>
      </table>
      </div>

@endsection
