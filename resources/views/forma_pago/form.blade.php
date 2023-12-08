<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion_forma_pago') }}
            {{ Form::text('descripcion_forma_pago', $formaPago->descripcion_forma_pago, ['class' => 'form-control' . ($errors->has('descripcion_forma_pago') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Forma Pago']) }}
            {!! $errors->first('descripcion_forma_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>