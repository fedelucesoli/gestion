@extends('layouts.admin')

@section('content')


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        Obras
      </div>
    </div>
      <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>

        @each('admin.partials.carditem', $items, 'item')
      </div>
  </div>
@endsection
