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
