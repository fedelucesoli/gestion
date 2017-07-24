<form class="form-horizontal" action="{{ $action }}" method="post"  enctype="multipart/form-data">
    {{ csrf_field() }}
   <div class="form-group ">
    <label class="control-label col-sm-3 requiredField" for="titulo">Titulo<span class="asteriskField">*</span></label>
    <div class="col-sm-8">
     <input class="form-control" id="titulo" name="titulo" type="text" value="{{@$item->titulo}}"/>
    </div>
   </div>
   <div class="form-group ">
    <label class="control-label col-sm-3 requiredField" for="categoria">Categoria <span class="asteriskField">*</span>
    </label>
    <div class="col-sm-8">
     <select class="select form-control" id="categoria" name="categoria">
      <option selected="selected" value=""></option>
      <option value="Calles">Calles</option>
      <option value="Bacheo">Bacheo</option>
      <option value="Luminarias">Luminarias</option>
      <option value="Espacio P&uacute;blico">Espacio P&uacute;blico</option>
     </select>
    </div>
   </div>
   <div class="form-group ">
    <label class="control-label col-sm-3 requiredField" for="descripcion">Descripci&oacute;n <span class="asteriskField">*</span>
    </label>
    <div class="col-sm-8">
     <textarea class="form-control" cols="40" id="descripcion" name="descripcion" rows="10">{{@$item->descripcion}}</textarea>
    </div>
   </div>
   <div class="form-group ">
    <label class="control-label col-sm-3" for="fecha_inicio">Fecha de inicio</label>
    <div class="col-sm-8">
     <input class="form-control" id="fecha_inicio" name="fecha_inicio" placeholder="" type="date" value="{{@$item->fecha_inicio}}"/>
    </div>
   </div>
   <div class="form-group ">
    <label class="control-label col-sm-3" for="fecha_fin">Fecha de finalizacion</label>
    <div class="col-sm-8">
     <input class="form-control" id="fecha_fin" name="fecha_fin" placeholder="" type="date" value="{{@$item->fecha_fin}}"/>
    </div>
   </div>
   <div class="form-group ">
    <label class="control-label col-sm-3" for="ubicacion">Ubicacion</label>
    <div class="col-sm-8">
      {!!$map['html']!!}
      <input type="hidden" name="lat" id="lat" value="" >
      <input type="hidden" name="lng" id="lng" value="" >
    </div>
   </div>
   <hr>
   <div class="form-group">
    <div class="col-sm-6 col-sm-offset-3">
     <button class="btn btn-primary " name="submit" type="submit">Cargar</button>
    </div>
   </div>
</form>
