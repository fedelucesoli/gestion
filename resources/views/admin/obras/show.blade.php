@extends('layouts.admin')

@section('content')

  <div class="row">

  <div class="col-md-12">
    <ol class="breadcrumb" style="display:inline-block">
      <li><a href="{{ url('/')}}">Inicio</a></li>
      <li class="active"><a href="#">{{ $item->categoria }}</a></li>
    </ol>
    <span class="pull-right"><a href="{{ url()->previous() }}">Volver </a></span>
    <hr>
  </div>

  <div class="col-md-6">
      <h1>{{$item->titulo}}</h1>
      <p>{{$item->descripcion}}</p>

      <div class="detalle">
        <h3 class="alt" class="alt">Estado de la obra</h3>

          <div class="progreso">

            <span class="descripcion">Inicio</span>
            <span class="descripcion pull-right">Finalización</span>


            <div class="timeline">
              <div class="timeline-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>

            <span class="fecha">{{ $item->fecha_inicio}}</span>
            <span class="fecha pull-right">{{ $item->fecha_fin}}</span>

          </div>

      </div>
    </div>

    <div class="col-md-6">
      @component('web.partials.galeria', ['item' => $item ])@endcomponent
      <div class="detalle">
        {!!$map['html']!!}
      </div>
    </div>

  </div>

@endsection
