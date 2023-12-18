<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_ciudad') }}
            {{ Form::text('nombre_ciudad', $ciudade->nombre_ciudad, ['class' => 'form-control' . ($errors->has('nombre_ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Ciudad']) }}
            {!! $errors->first('nombre_ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>