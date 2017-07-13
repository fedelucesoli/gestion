@extends('layouts.app')

@push('scripts')
  {!!$map['js']!!}
@endpush

@section('content')

<div class="container">

  @include('web.partials.ficha')

</div>

{{-- @include('web.partials.itemrelacionados') --}}

@endsection
