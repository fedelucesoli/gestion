@extends('layouts.app')

@section('content')
<div class="container">


          <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
            @each('partials.carditem', $items, 'item')
          </div>

            {{-- <div class="panel panel-default">
                <div class="panel-heading">INIcio</div>

                <div class="panel-body">
                    <h2>Pagina de inicio</h2>
                    <p>Aca va el listado de items</p>
                    {{-- @if (Auth::guest()) --}}
                        {{-- <li><a href="{{ route('admin.dashboard') }}">dashboard</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li> --}}
                    {{-- @else --}}

                </div>
            </div> 

</div>
@endsection
