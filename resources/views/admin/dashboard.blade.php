@extends('layouts.admin')

@section('content')


  <div class="">
    <div class="row">
      <div class="col-md-12">
        <h2>Obras</h2>
      <hr>
        <a href="#" class="{{ Request::is('admin') ? 'active' : '' }} btn">Escritorio <span class="sr-only">(current)</span></a>
        <a href="{{route('admin.item.add')}}" class="{{ Request::is('items/add') ? 'active' : '' }} btn "><i class="fa fa-plus"></i>Agregar</a>
        <a href="{{route('admin.item.list')}}" class="{{ (Request::is('items/list') ? 'active' : '') }} btn "><i class="fa fa-list"></i>Listado</a>

      </div>
    </div>
      <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>

        @each('admin.partials.carditem', $items, 'item')
      </div>
</div>
@endsection
