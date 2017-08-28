@extends('layouts.admin')

@section('content')

<div class="nav-head">
  <div class="row">
    <div class="col-md-6">
      <h1>Listado de Obras</h1>
    </div>
    <div class="col-md-4">
      <a href="{{route('admin.obras.create')}}" class="btn btn-primary float-right"> Agregar Obra</a>
    </div>
    <div class="col-md-12">
      <ul>
        <li>Fede</li>
        <li>Fede</li>
        <li>Fede</li>
        <li>Fede</li>
      </ul>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Titulo</th>
        <th>Categoria</th>
        <th>Publicado</th>

        <th class="text-center">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <th><a href="{{route('admin.obras.show', ['id' => $item->id])}}">{{$item->titulo}}</a></th>
          <th>{{$item->categoria}}</th>
          <th>
            @if ($item->activo)
              <a href="" data-id ="{{$item->id}}" class="btn estado" style="color: green"><span class="fa fa-toggle-on fa-lg"></span></a> &nbsp;
            @else
              <a href="" data-id ="{{$item->id}}" class="btn estado" style="color: green"><span class="fa fa-toggle-off fa-lg"></span></a> &nbsp;
            @endif
          </th>
            <td class="text-center">

              <a href="{{route('admin.obras.edit', $item)}}" class="btn btn-secondary">Editar</a>
              <a href="eliminar" data-id="{{$item->id}}" class="btn btn-secondary eliminar">Borrar</span></a>
            </td>
        </tr>
      @endforeach

    </tbody>
  </table>
  </div>
</div>

@endsection
@push('scripts')
  <script type="text/javascript">
  $('.estado').click(function(event){
    event.preventDefault();
    var this1 = $(this);
    var id = $(this).data('id');
        $.ajax({
          headers: {
             'X-CSRF-TOKEN':"{{ csrf_token() }}"
         },
          type: "POST",
          data: {'id': id },
          url: 'obras/estado',

          success: function(result) {
            var json = $.parseJSON(result);
            console.log(json.estado);
            if (json.estado) {
              this1.children('.fa').removeClass('fa-toggle-off').addClass('fa-toggle-on');
              console.log('on');
            }else{
              this1.children('.fa').removeClass('fa-toggle-on').addClass('fa-toggle-off');
              console.log('off');
            }

          }
        });

  });
  $('.eliminar').click(function(event){
    event.preventDefault();
    var this1 = $(this);
    var id = $(this).data('id');
    if (confirm("ESTA ACCION NO SE PUEDE DESHACER. Seguro desea eliminar? ") == true) {

        $.ajax({
          headers: {
             'X-CSRF-TOKEN':"{{ csrf_token() }}"
         },
          type: "DELETE",
          data: {'id': id },
          url: 'obras/destroy',

          success: function(result) {
            this1.parent().parent().hide();
          }
        });
      }
  });
  </script>
@endpush
