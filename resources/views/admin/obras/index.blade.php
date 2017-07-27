@extends('layouts.admin')

@section('content')


      <div class="col-md-12" style="margin: 0 0 25px 0;">
        <h1>Listado de Obras</h1>
        <a href="{{route('admin.obras.create')}}" class="btn"> Agregar Obra</a>
      </div>
      <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Estado</th>
            <th class="text-center">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <th><a href="{{route('admin.obras.show', ['id' => $item->id])}}">{{$item->titulo}}</a></th>
              <th class="info">{{$item->categoria}}</th>
              <th class="">

                @if ($item->activo)
                  Publicado
                @else
                  Borrador
                @endif</th>
                <td class="text-center">
                  <a href="#" class="btn btn-success btn-xs"><span class="fa fa-check"></span></a> &nbsp;
                  <a href="#" class="btn btn-warning btn-xs"><span class="fa fa-pencil"></span></a> &nbsp;
                  <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                </td>
              {{-- <th class="text-right">
                <a href="{{route('admin.obras.edit', ['id' => $item->id])}}">Editar</a> -
                <a href="#">Eliminar</a></th> --}}
            </tr>
          @endforeach

        </tbody>
      </table>
      </div>

@endsection
