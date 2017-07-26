@extends('layouts.admin')

@section('content')
  <div class="row text-center">

      <div class="col-md-3">
        <h3>{{count($items)}}</h3>
        <p>Total obras listadas</p>
      </div>
      <div class="col-md-3">
        <h3>{{count($items)}}</h3>
        <p>Obras publicadas</p>
      </div>
      <div class="col-md-3">
        <h3>{{count($items)}}</h3>

        <p>Obras en borrador</p>
      </div>
      <div class="col-md-3"></div>
  </div>

@endsection
