@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
        @each('web.partials.tarjeta', $items, 'item')
      </div>
  </div>

@endsection
