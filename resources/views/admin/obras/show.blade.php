@extends('layouts.admin')

@section('content')

  <div class="container">
    <div class="ficha box-linea">
      <div class="row">
        <div class="col-md-6">
          <h1>{{$item->titulo}}</h1>
          <p>{{$item->descripcion}}</p>

          @include('web.partials.fechas', ['item' => $item])
          @include('web.partials.datodeobra', ['item' => $item])



        </div>
        <div class="col-md-6">

          @include('web.partials.galeria', ['item' => $item])
          @include('web.partials.mapa', ['item' => $item])

        </div>
        <div class="col-md-12">
          <a href="{{route('admin.obras.edit', ['id' => $item->id])}}" class="btn btn-primary">Editar</a>
          <a href="admin.obras.edit.{$item->id}" class="btn btn-primary">Eliminar</a>
          <a href="admin.obras.edit.{$item->id}" class="btn btn-primary">Publicar</a>
        </div>
      </div>
    </div>
    @include('web.partials.itemrelacionados', ['relacionados' => $itemrelacionados])

  </div>

@endsection
