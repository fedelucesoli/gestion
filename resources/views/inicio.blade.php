@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
        @each('web.partials.carditem', $items, 'item')
      </div>
  </div>

@endsection

@section('modal')
  @include('web.partials.modal')
@endsection
