@extends('layouts.admin')

@section('content')
  
<br>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3"><h3>Agregar obra</h3></div>
  </div>
  <br>

  <div class="row">
    @php
      $data['action'] = route("admin.obras.update", $item);
    @endphp

    @include('admin.partials.form-edit', $data)
  </div>
@endsection
