@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="ficha box-linea">
      <div class="row">
        <div class="col-md-12 text-center" style="padding: 80px 0">
          <h2>Ocurrio un error!</h2>
          <p class="lead">{{ $exception->getMessage() }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
