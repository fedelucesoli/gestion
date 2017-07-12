@extends('layouts.app')
@push('scripts')
  {!!$map['js']!!}
@endpush
@section('content')

<div class="container">
  <div class="ficha box-linea">
    <div class="row">
      <div class="col-md-6">
      </div>

      <div class="col-md-6">
        <ol class="breadcrumb">
          <li><a href="#">Inicio</a></li>
          <li class="active"><a href="#">{{ $item->categoria }}</a></li>
        </ol>

        <h2>{{$item->titulo}}</h2>
        <p>{{$item->descripcion}}</p>

        <div class="detalle">
          <h3>Estado de la obra</h3>
          <div class="timeline">
            <div class="inicio">
              <h4>Fecha de inicio</h4>
              <span>{{ $item->fecha_inicio}}</span>
            </div>
            <div class="fin">
              <h4>Fecha de finalización</h4>
              <span>{{ $item->fecha_fin}}</span>
            </div>
          </div>
        </div>

        <div class="detalle">
          <h3>Ubicación</h3>
          {!!$map['html']!!}
        </div>
        <div class="detalle">
          <h3>Documentos</h3>
          <ul class="listado documentos">
            <li>
              <span class="icon formato"></span>
              <h4>Pliego de obra</h4>
              <span>115 kb</span>
              <a href="" class="button">Descargar</a>
            </li>
            <li>
              <span class="icon formato"></span>
              <h4>Pliego de obra</h4>
              <span>115 kb</span>
              <a href="" class="button">Descargar</a>
            </li>
          </ul>
        </div>
      </div>
      {{-- fin div6 --}}

    </div>
  </div>
</div>

@include('web.partials.itemrelacionados')

@endsection
