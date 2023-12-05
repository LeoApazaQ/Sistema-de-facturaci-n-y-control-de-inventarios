<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('documento') }}
            {{ Form::text('documento', $proveedore->documento, ['class' => 'form-control' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
            {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div>
            {{ Form::label('tipo_documento') }}
            <select name="cod_tipo_documento" class="form-select">
                @foreach($documentos as $documento)
                    <option value="{{ $documento->id }}" {{ $documento->id == $proveedore->cod_tipo_documento ? 'selected' : '' }}>
                        {{ $documento->descripcion }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $proveedore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $proveedore->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_comercial') }}
            {{ Form::text('nombre_comercial', $proveedore->nombre_comercial, ['class' => 'form-control' . ($errors->has('nombre_comercial') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Comercial']) }}
            {!! $errors->first('nombre_comercial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $proveedore->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div>
            {{ Form::label('cod_ciudad') }}
            <select name="cod_ciudad" class="form-select">
                @foreach($ciudades as $ciudad)
                    <option value="{{ $ciudad->id }}" {{ $ciudad->id == $proveedore->cod_ciudad ? 'selected' : '' }}>
                        {{ $ciudad->nombre_ciudad }}
                    </option>
                @endforeach
            </select>
        </div>
        
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>