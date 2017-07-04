@extends('layouts.app')


@section('content')

<div class="container">
  <div class="ficha">
    <div class="row">
    <div class="col-md-6">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          @foreach ($item->images as $key)
            @if ($loop->first)
                <li data-target="#slider" data-slide-to="{{$loop->index}}" class="active"></li>
            @else
                <li data-target="#slider" data-slide-to="{{$loop->index}}" class=""></li>
            @endif
          @endforeach
          <li data-target="#slider" data-slide-to="{{count($item->images)}}" class=""></li>
        </ol>

        <div class="carousel-inner" id="slider" role="listbox">
          @foreach($item->images as $image)
              @if ($loop->first)
                <div class="item active">
              @else
                <div class="item">
              @endif
                <img src="{{asset("uploads/full_size/$image->filename")}}" alt="{{$item->titulo}}">
              </div>
          @endforeach
              <div class="item">
                {!!$map['html']!!}
              </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-md-6">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <a href=""><h6>{{$item->categoria}}</h6></a>
      <h2>{{$item->titulo}}</h2>
      <div class="top-left"></div>
      <div class="ficha">
        <p>{{$item->descripcion}}</p>
        <hr>
        <span class="detalle">Fecha de inicio</span>
        <p>{{date('d-m-Y', strtotime($item->fecha_inicio))}}</p>


        <span class="detalle">Fecha de finalizacion</span>
        <p>{{date('d-m-Y', strtotime($item->fecha_fin))}}</p>
      </div>

    </div>
  </div>
  </div>
</div>
@include('web.partials.itemrelacionados')

@endsection
