<div class="form-group @if ($errors->has('fecha_inicio')) has-error @endif">

    {{ Form::label('fecha_inicio', "Fecha de Inicio", ['class' => 'control-label col-sm-3']) }}
    <div class="col-sm-8">
      {{ Form::text('fecha_inicio', null, array('class' => 'form-control')) }}
      @if ($errors->has('fecha_inicio'))<p class="help-block">{{ $errors->first('fecha_inicio') }}</p>@endif
    </div>

</div>
<div class="form-group @if ($errors->has('fecha_fin')) has-error @endif">

    {{ Form::label('fecha_fin', "Fecha de Finalizacion", ['class' => 'control-label col-sm-3']) }}
    <div class="col-sm-8">
      {{ Form::text('fecha_fin', null, array('class' => 'form-control')) }}
      @if ($errors->has('fecha_fin'))<p class="help-block">{{ $errors->first('fecha_fin') }}</p>@endif
    </div>

</div>
<div class="form-group @if ($errors->has('fecha_licitacion')) has-error @endif">

    {{ Form::label('fecha_licitacion', "Fecha de Licitacion", ['class' => 'control-label col-sm-3']) }}
    <div class="col-sm-8">
      {{ Form::text('fecha_licitacion', null, array('class' => 'form-control')) }}
      @if ($errors->has('fecha_licitacion'))<p class="help-block">{{ $errors->first('fecha_licitacion') }}</p>@endif
    </div>

</div>
<div class="form-group @if ($errors->has('monto')) has-error @endif">

    {{ Form::label('monto', "Monto", ['class' => 'control-label col-sm-3']) }}
    <div class="col-sm-8">
      {{ Form::text('monto', null, array('class' => 'form-control')) }}
      @if ($errors->has('monto'))<p class="help-block">{{ $errors->first('monto') }}</p>@endif
    </div>

</div>
<div class="form-group @if ($errors->has('plazo_ejecucion')) has-error @endif">

    {{ Form::label('plazo_ejecucion', "Plazo de Ejecución", ['class' => 'control-label col-sm-3']) }}
    <div class="col-sm-8">
      {{ Form::text('plazo_ejecucion', null, array('class' => 'form-control')) }}
      @if ($errors->has('plazo_ejecucion'))<p class="help-block">{{ $errors->first('plazo_ejecucion') }}</p>@endif
    </div>

</div>
<div class="form-group @if ($errors->has('contatista')) has-error @endif">

    {{ Form::label('contatista', "Contratista", ['class' => 'control-label col-sm-3']) }}
    <div class="col-sm-8">
      {{ Form::text('contatista', null, array('class' => 'form-control')) }}
      @if ($errors->has('contatista'))<p class="help-block">{{ $errors->first('contatista') }}</p>@endif
    </div>

</div>
