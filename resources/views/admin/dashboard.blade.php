@extends('layouts.admin')

@section('content')
      {{--
      <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
        @each('admin.partials.carditem', $items, 'item')
      </div> --}}
      
      <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Activo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <th>{{$item->titulo}}</th>
              <th>{{$item->categoria}}</th>
              <th>{{$item->activo}}</th>
              <th>Editar - Eliminar</th>
            </tr>
          @endforeach

        </tbody>
      </table>
      </div>

@endsection
