

<div class="form-group @if ($errors->has('titulo')) has-error @endif">

    {{ Form::label('titulo', "Titulo", ['class' => 'control-label col-sm-3']) }}
    <div class="col-sm-8">
      {{ Form::text('titulo', null, array('class' => 'form-control')) }}
      @if ($errors->has('titulo'))<p class="help-block">{{ $errors->first('titulo') }}</p>@endif
    </div>

</div>

<div class="form-group @if ($errors->has('categoria')) has-error @endif">

    {{ Form::label('categoria', "Categoria", ['class' => 'control-label col-sm-3']) }}
    <div class="col-sm-8">
      {{ Form::select('categoria', $categorias, null, ['placeholder' => 'Categoria', 'class' => 'select form-control']) }}
      @if ($errors->has('categoria'))<p class="help-block">{{ $errors->first('categoria') }}</p>@endif
    </div>

</div>

<div class="form-group @if ($errors->has('titulo')) has-error @endif">

    {{ Form::label('descripcion', "Descripcion", ['class' => 'control-label col-sm-3']) }}
    <div class="col-sm-8">
      {{ Form::textarea('descripcion', null, array('class' => 'form-control')) }}
      @if ($errors->has('titulo'))<p class="help-block">{{ $errors->first('descripcion') }}</p>@endif
    </div>

</div>


@include('admin.partials.form-mapa')
@include('admin.partials.form-img')

<div class="form-group">
 <div class="col-sm-6 col-sm-offset-3">
  <button class="btn btn-primary">Cancelar</button>
  {{ Form::submit('Guardar Cambios', ['class'=>'btn btn-danger'] )}}
 </div>
</div>
