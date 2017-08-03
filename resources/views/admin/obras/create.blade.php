@extends('layouts.admin')

@section('content')

  <div class="row">
    <div class="col-sm-6 col-sm-offset-3"><h3>{{$title}}</h3></div>
  </div>


  <div class="row">

    @php
      $data['action'] = route("admin.obras.store");
    @endphp

    @if(!$item->id)
    {{ Form::model($item, [
      'url' => $action,
      'files' => true,
      'class' => 'form-horizontal'
      ]) }}
    @else
      {!! Form::model($item, [
          'url' => $action,
          'method' => 'put',
          'files' => true,
          'class' => 'form-horizontal'
        ]) !!}
    @endif

    @include('admin.partials.form-edit', $data)


    {{-- @include('common.modal', $modal) --}}

    {{ Form::close() }}


  </div>
@endsection
