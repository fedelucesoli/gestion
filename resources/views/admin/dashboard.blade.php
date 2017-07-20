@extends('layouts.admin')

@section('content')

      <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
        @each('admin.partials.carditem', $items, 'item')
      </div>

@endsection
