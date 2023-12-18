<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $articulo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_venta') }}
            {{ Form::text('precio_venta', $articulo->precio_venta, ['class' => 'form-control' . ($errors->has('precio_venta') ? ' is-invalid' : ''), 'placeholder' => 'Precio Venta']) }}
            {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_costo') }}
            {{ Form::text('precio_costo', $articulo->precio_costo, ['class' => 'form-control' . ($errors->has('precio_costo') ? ' is-invalid' : ''), 'placeholder' => 'Precio Costo']) }}
            {!! $errors->first('precio_costo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $articulo->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div>
            {{ Form::label('tipo_articulo') }}
            <select name="cod_tipo_articulo"  class="form-select">
                @foreach($tiposArticulo as $tipoArticulo)
                    <option value="{{ $tipoArticulo->id }}" {{ $tipoArticulo->id == $articulo->cod_tipo_articulo ? 'selected' : '' }}>
                        {{ $tipoArticulo->descripcion_articulo }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            {{ Form::label('proveedor') }}
            <select name="cod_proveedor"  class="form-select">
                @foreach($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}" {{ $proveedor->id == $articulo->cod_proveedor ? 'selected' : '' }}>
                        {{ $proveedor->nombre_comercial }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('fecha_ingreso') }}
            {{ Form::text('fecha_ingreso', $articulo->fecha_ingreso, ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ingreso']) }}
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>