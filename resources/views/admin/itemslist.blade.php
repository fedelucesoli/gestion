@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
          <h1>Listado</h1>

          @each('admin.partials.fichaitem', $items, 'item')


    </div>
@endsection
