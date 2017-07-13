@extends('layouts.app')

@section('content')


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <a href="{{ route('admin.item.create')}}" class="btn btn-primary">Agregar Items</a>
      </div>
    </div>
      <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
        @each('admin.partials.carditem', $items, 'item')
      </div>
  </div>
@endsection
