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
    </div>
    <div class="col-md-6">
      <div class="card">
        Categoria: {{$item->categoria}}<br>
        Fecha de inicio: {{date('d-m-Y', strtotime($item->fecha_inicio))}}<br>
        Fecha de finalizacion: {{date('d-m-Y', strtotime($item->fecha_fin))}}
        {{ $item->lat }}<br>
        {{ $item->lng }}<br>
      </div>
      <div class="redes">
        Compartí esta obra en tus redes.
         Facebook  Twitter  Google+

      </div>

    </div>
    <div class="col-md-6">
      <div id="slider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
      </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
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

    <!-- Controls -->
    <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
      {{-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> --}}
      <i class="fa fa-chevron-left" aria-hidden="true"></i>

      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slider" role="button" data-slide="next">
      {{-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> --}}
      <i class="fa fa-chevron-right" aria-hidden="true"></i>

      <span class="sr-only">Next</span>
    </a>
  </div>
      {!!$map['html']!!}

    </div>
  </div>
</div>

@include('partials.itemrelacionados')

@endsection
