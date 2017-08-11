<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Obras públicas Lobos</title>


    <link href="{{ asset('assets/css/lobostrap/lobostrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/bootstrap-base.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/dist/bootstrap.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/plugins/animate.css') }}" rel="stylesheet">

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    @stack('css')


</head>
<body>
   @include('common/header-solo')

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

             <ul class="nav">
               <li class="{{ Request::is('admin') ? 'activo' : '' }}" ><a href="{{route('admin.dashboard')}}" >Escritorio</a></li>
               <li class="{{ Request::is('admin/obras/*') || Request::is('admin/obras')  ? 'activo' : '' }}" ><a href="{{route('admin.obras.index')}}" >Obras</a></li>
               <li class="{{ Request::is('admin/categoria') || Request::is('admin/categoria/*') ? 'activo' : '' }}"><a href="{{route('admin.categoria.index')}}">Categorias</a></li>

               <li class="right"><a href="">{{ Auth::user()->name }} <span class="caret"></span></a></li>
             </ul>

         </div>
       </div>
      </div>


    <div class="container box-linea">
       @if (Session::has('mensaje'))
            <div class="alert alert-info">{{ Session::get('mensaje') }}</div>
        @endif

       @yield('content')
     </div>

    @include('common.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @stack('scripts')

</body>
</html>
