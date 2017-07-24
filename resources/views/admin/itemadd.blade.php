@extends('layouts.admin')

@section('content')
  <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
<br>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3"><h3>Agregar item</h3></div>
  </div>
  <br>

  <div class="row">
    @php
      $data['action'] = route("admin.obras.store");
    @endphp

    @include('admin.partials.form', $data)
  </div>
@endsection
