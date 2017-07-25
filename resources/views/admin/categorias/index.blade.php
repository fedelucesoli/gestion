@extends('layouts.admin')

@section('content')

      <div class="col-md-12" style="margin: 0 0 25px 0;">
        <h1>Listado de Categorias</h1>
      </div>
      <div class="col-md-6">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categorias as $categoria)
            <tr>
              <th scope="row">{{$categoria->id}}</th>
              <th class="">{{$categoria->nombre}}</th>

              <th>
                <a href="{{route('admin.categoria.edit', ['id' => $categoria->id])}}">Editar</a> -
                <a href="#" onclick="d(this, {{$categoria->id}})">Eliminar</a>
              </th>
            </tr>
          @endforeach

        </tbody>
      </table>
      </div>
      <div class="col-md-6">

        <form class="form-horizontal" action="{{route('admin.categoria.store')}}" method="post">
            {{ csrf_field() }}
            <fieldset>
              <h3>Agregar Categoria</h3>
            </fieldset>
           <div class="form-group ">
            <label class="control-label col-sm-3" for="nombre">Nombre<span class="asteriskField">*</span></label>
            <div class="col-sm-8">
             <input class="form-control" id="nombre" name="nombre" type="text" value="{{@$categoria->nombre}}"/>
            </div>
           </div>
           <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3">
             <button class="btn btn-primary " name="submit" type="submit">Cargar</button>
            </div>
           </div>

      </div>

@endsection

@push('scripts')
<script type="text/javascript">
function d(obj, id) {
  event.preventDefault();
  var x = obj.parentNode.parentNode;

if (confirm('Eliminar?')) {
    $.ajax({
      headers: {
         'X-CSRF-TOKEN':"{{ csrf_token() }}"
     },
      type: "DELETE",
      url: 'categoria/' + id,

      success: function(result) {
        x.remove();
      }
    });
  }
}

</script>

@endpush
