{{-- TODO hrefs --}}
<ol class="breadcrumb" style="display:inline-block">
  <li><a href="{{ url('/')}}">Inicio</a></li>
  <li class="active"><a href="{!! route('web.categoria.list', ['slug' => $item->categoria]) !!}">{{ $item->categoria }}</a></li>
</ol>
<span class="pull-right"><a href="{{ url()->previous() }}">Volver </a></span>
<hr>

<h1>{{$item->titulo}}</h1>
<p>{{$item->descripcion}}</p>
