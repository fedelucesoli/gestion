<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gestion Lobos') }}</title>

    <!-- Styles -->
    <title>Obras públicas Lobos</title>

    <!-- Bootstrap -->

    {{-- <link href="{{ asset('assets/dist/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet"> --}}

    <link href="{{ asset('assets/css/lobostrap/lobostrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/bootstrap-base.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/animate.css') }}" rel="stylesheet">


    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    @stack('css')


</head>
<body>
   @include('admin.partials/header')

   {{-- @if (Auth::guest())
       <li><a href="{{ route('login') }}">Login</a></li>
       <li><a href="{{ route('register') }}">Register</a></li>
   @else
       <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
               {{ Auth::user()->name }} <span class="caret"></span>
           </a>

           <ul class="dropdown-menu" role="menu">
               <li>
                   <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                       Logout
                   </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       {{ csrf_field() }}
                   </form>
               </li>
           </ul>
       </li>
   @endif --}}

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <a href="#" class="{{ Request::is('admin') ? 'active' : '' }} btn">Escritorio <span class="sr-only">(current)</span></a>
              <a href="{{route('admin.item.add')}}" class="{{ Request::is('admin/items/add') ? 'active' : '' }} btn "><i class="fa fa-plus"></i>Agregar</a>
              <a href="{{route('admin.item.list')}}" class="{{ (Request::is('admin/items/list') ? 'active' : '') }} btn "><i class="fa fa-list"></i>Listado</a>

            </div>
          </div>
          {{-- <div class="row">
            <div class="col-sm-3 col-md-2">
              <ul class="nav nav-sidebar">
                <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="#">Escritorio <span class="sr-only">(current)</span></a></li>
                <li class="{{ Request::is('items/add') ? 'active' : '' }}"><a href="{{route('admin.item.add')}}">Agregar</a></li>
                <li class="{{ (Request::is('items/list') ? 'active' : '') }}"><a href="{{route('admin.item.list')}}">Listado</a></li>
              </ul>
            </div> --}}

            {{-- <div class="col-sm-9 col-md-10 main"> --}}
              @yield('content')
            {{-- </div>
          </div> --}}
        </div>

        <footer>
          <div class="container">
            <div class="row">
              {{-- todo: iconos de las redes sociales y link a la pagina web --}}
              <div class="col-md-12 text-right"> 2017 - Municipio de Lobos </div>
            </div>
          </div>
        </footer>


    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    @stack('scripts')

</body>
</html>
