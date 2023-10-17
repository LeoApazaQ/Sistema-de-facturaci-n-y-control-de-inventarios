@extends('layouts.app')

@section('template_title')
    {{ $articulo->name ?? "{{ __('Show') Articulo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Articulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('articulos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $articulo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Venta:</strong>
                            {{ $articulo->precio_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Costo:</strong>
                            {{ $articulo->precio_costo }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $articulo->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Tipo Articulo:</strong>
                            {{ $articulo->cod_tipo_articulo }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Proveedor:</strong>
                            {{ $articulo->cod_proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $articulo->fecha_ingreso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
