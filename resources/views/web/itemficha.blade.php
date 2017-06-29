@extends('layouts.app')

@push('css')
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
@endpush

@push('scripts')
<script type="text/javascript">
  $('.carousel').carousel();
</script>
@endpush

@section('content')
<script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>{{$item->titulo}}</h1>
      <div class="top-left"></div>
    </div>

    <div class="col-md-6">
      <div class="ficha">
        <p class="">{{$item->descripcion}}</p>
        Categoria: {{$item->categoria}}<br>
        Fecha de inicio: {{date('d-m-Y', strtotime($item->fecha_inicio))}}<br>
        Fecha de finalizacion: {{date('d-m-Y', strtotime($item->fecha_fin))}}

      </div>
      <div class="redes">
        Compartí esta obra en tus redes.

      </div>

    </div>
    <div class="col-md-6">
      <div id="slider" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
        @if ($item->images->count() > 1)
          <ol class="carousel-indicators">


        @foreach ($item->images as $key)
          @if ($loop->first)
              <li data-target="#slider" data-slide-to="{{$loop->index}}" class="active"></li>
          @else
              <li data-target="#slider" data-slide-to="{{$loop->index}}" class=""></li>
          @endif
        @endforeach
      </ol>

      <!-- Controls -->
      <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#slider" role="button" data-slide="next">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <span class="sr-only">Próxima</span>
      </a>

      @endif

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style=" width:100%; height: 250px !important; margin-bottom: 20px;">
      @foreach($item->images as $image)
          @if ($loop->first)
            <div class="item active">
          @else
            <div class="item">
          @endif
          <img src="{{asset("uploads/full_size/$image->filename")}}" alt="{{$item->titulo}}">
            </div>
      @endforeach
    </div>


  </div>
  {!!$map['html']!!}

    </div>

  </div>
</div>

@include('web.partials.itemrelacionados')

@endsection
