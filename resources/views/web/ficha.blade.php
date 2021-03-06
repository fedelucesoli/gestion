@extends('layouts.app')

@push('metatags')
  @include('web.partials.metatags', ['item' => $item])
@endpush

@section('content')

<div class="container">
  <div class="ficha box-linea">
    <div class="row">

      <div class="col-md-6">
        @include('web.partials.descripcion', ['item' => $item])
        @include('web.partials.fechas', ['item' => $item])
        @include('web.partials.datodeobra', ['item' => $item])
      </div>

      <div class="col-md-6">
        @include('web.partials.galeria', ['item' => $item])
        @include('web.partials.mapa', ['item' => $item])
      </div>

      <div class="col-md-12">
        @include('web.partials.compartir', ['item' => $item])
      </div>

    </div>
  </div>

  @include('web.partials.itemrelacionados', ['relacionados' => $itemrelacionados])

</div>



@endsection
