@extends('layouts.admin')

@section('content')


    <div class="row box-linea">
      <div class="col-md-6">
        <h1>{{$item->titulo}}</h1>
        <p>{{$item->descripcion}}</p>

        @include('web.partials.fechas', ['item' => $item])
        @include('web.partials.datodeobra', ['item' => $item])

        {{-- @include('web.partials.galeria', ['item' => $item]) --}}
        {{-- @include('web.partials.mapa', ['item' => $item]) --}}

      </div>


        <div class="col-md-12">
          <a href="{{route('admin.obras.edit', ['id' => $item->id])}}" class="btn btn-primary">Editar</a>
        </div>

      </div>
      <div class="row box-linea" style="margin-top: 20px;">
        <div class="col-md-8">
          <h2>Datos</h2>
          <hr>
          <div class="row">
            <div class="col-md-4"><strong>ID:</strong> {{$item->id}}</div>
            <div class="col-md-4"><strong>Creado:</strong> {{ $item->created_at->format('d-m-Y') }}</div>
            <div class="col-md-4"><strong>Modificado:</strong> {{ $item->updated_at->format('d-m-Y') }}</div>
          </div>
        </div>
        <div class="col-md-4">
          <h2>Acciones</h2>
          <hr>

          @if ($item->activo)
            <a href="" data-id ="{{$item->id}}" class="btn btn-success btn-xs estado" style="color: green"><span class="fa fa-toggle-on fa-lg"></span></a> &nbsp;
          @else
            <a href="" data-id ="{{$item->id}}" class="btn btn-success btn-xs estado" style="color: green"><span class="fa fa-toggle-off fa-lg"></span></a> &nbsp;
          @endif
          <a href="{{route('admin.obras.edit', $item)}}" class="btn btn-warning btn-xs"><span class="fa fa-pencil fa-lg"></span></a> &nbsp;
          <a href="eliminar" data-id="{{$item->id}}" class="btn btn-danger btn-xs eliminar"><span class="fa fa-trash fa-lg "></span></a>
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
          url: 'estado',

          success: function(result) {
            console.log('click2');

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
