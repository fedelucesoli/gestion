@extends('layouts.app')
@push('scripts')
  {!!$map['js']!!}
@endpush
@section('content')

<div class="container">
  <div class="ficha box-linea">
    <div class="row">
      <div class="col-md-6">
        @component('web.partials.galeria', ['item' => $item ])
          
        @endcomponent
      </div>

      <div class="col-md-6">
        <ol class="breadcrumb">
          <li><a href="#">Inicio</a></li>
          <li class="active"><a href="#">{{ $item->categoria }}</a></li>
        </ol>

        <h2>{{$item->titulo}}</h2>
        <p>{{$item->descripcion}}</p>

        {{-- compartir --}}


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
              <span class="fecha pull-right">
                {{ $item->fecha_fin}}
              </span>

            </div>
          {{-- <ol class="timeline">
            <li class="inicio">
              <h4>Fecha de inicio</h4>
              <span>{{ $item->fecha_inicio}}</span>
            </li>
            <li class="fin">
              <h4>Fecha de finalización</h4>
              <span>{{ $item->fecha_fin}}</span>
            </li>
          </ol> --}}

        </div>

        <div class="detalle">
          <h3 class="alt">Ubicación</h3>
          {!!$map['html']!!}
        </div>

        {{-- <div class="detalle">
          <h3 class="alt">Documentos</h3>
          <div class="media">
            <div class="media-left media-middle">
                <img class="media-object" src="..." width="50px" alt="...">
            </div>
            <div class="media-body">
              <h4>Pliego de obra</h4>
              <span class="small">115 kb</span>
            </div>
            <div class="media-right media-middle">
              <a href="" class="button">Descargar</a>
            </div>
          </div>
          <div class="media">
            <div class="media-left media-middle">
                <img class="media-object" src="..." width="50px" alt="...">
            </div>
            <div class="media-body">
              <h4>Licitacion</h4>
              <span class="small">125 kb</span>
            </div>
            <div class="media-right media-middle">
              <a href="" class="button">Descargar</a>
            </div>
          </div>

        </div> --}}
      </div>
      {{-- fin div6 --}}

    </div>
  </div>
</div>

@include('web.partials.itemrelacionados')

@endsection
