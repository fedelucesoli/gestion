
<nav class="navbar navbar-menu">
  <div class="container">
    <div class="logo-menu">
      <a href="{{url('/')}}">

        <img src="{{ asset('assets/img/logo-municipiodelobos_blanco.png')}}" class="img-responsive" alt="Municipio de Lobos">

      </a>
    </div>



  <div class="collapse navbar-collapse navbar-right" id="collapse" >
    <ul class=" nav navbar-nav">
      <li class="{{ Request::is('/') ? 'active' : '' }}" ><a href="{{url('/')}}" >Web</a></li>
      <li class="{{ Request::is('admin/obras/*') || Request::is('admin/obras')  ? 'active' : '' }}" ><a href="{{route('admin.obras.index')}}" >Obras</a></li>
      <li class="{{ Request::is('admin/categoria') || Request::is('admin/categoria/*') ? 'active' : '' }}"><a href="{{route('admin.categoria.index')}}">Categorias</a></li>


      @if (Auth::guest())
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
      @endif
    </ul>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  </div>
</nav>
