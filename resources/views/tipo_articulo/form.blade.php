<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion_articulo') }}
            {{ Form::text('descripcion_articulo', $tipoArticulo->descripcion_articulo, ['class' => 'form-control' . ($errors->has('descripcion_articulo') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Articulo']) }}
            {!! $errors->first('descripcion_articulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>