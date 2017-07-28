@extends('layouts.admin')

@section('content')


      <div class="col-md-12" style="margin: 0 0 25px 0;">
        <h1>Listado de Obras</h1>
        <a href="{{route('admin.obras.create')}}" class="btn"> Agregar Obra</a>
      </div>
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
              <th class="info">{{$item->categoria}}</th>
              <th>
                @if ($item->activo)
                  <a href="" data-id ="{{$item->id}}" class="btn btn-success btn-xs estado" style="color: green"><span class="fa fa-toggle-on fa-lg"></span></a> &nbsp;
                @else
                  <a href="" data-id ="{{$item->id}}" class="btn btn-success btn-xs estado" style="color: green"><span class="fa fa-toggle-off fa-lg"></span></a> &nbsp;
                @endif
              </th>
                <td class="text-center">

                  <a href="#" class="btn btn-warning btn-xs"><span class="fa fa-pencil fa-lg"></span></a> &nbsp;
                  <a href="eliminar" data-id="{{$item->id}}" class="btn btn-danger btn-xs eliminar"><span class="fa fa-trash fa-lg "></span></a>
                </td>
            </tr>
          @endforeach

        </tbody>
      </table>
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
    if (confirm("ESTA ACCION NO SE PUEDE DESHACER. Eliminar? ") == true) {

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
