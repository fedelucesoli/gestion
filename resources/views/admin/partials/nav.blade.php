<div class="container">
  <div class="row">
    <div class="col-md-12">

      <ul class="nav">

      </ul>

      <ul class="nav nav-pills">
        <li class="{{ Request::is('admin') ? 'active' : '' }}" ><a href="{{route('admin.dashboard')}}" >Escritorio</a></li>
        <li class="{{ Request::is('admin/obras/*') || Request::is('admin/obras')  ? 'active' : '' }}" ><a href="{{route('admin.obras.index')}}" >Obras</a></li>
        <li class="{{ Request::is('admin/categoria') || Request::is('admin/categoria/*') ? 'active' : '' }}"><a href="{{route('admin.categoria.index')}}">Categorias</a></li>


      </ul>

    </div>
  </div>
</div>
