@extends('layouts.app')

@section('template_title')
    {{ $proveedore->name ?? "{{ __('Show') Proveedore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedores</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $proveedore->documento }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $proveedore->tipoDocumento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proveedore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $proveedore->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Comercial:</strong>
                            {{ $proveedore->nombre_comercial }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $proveedore->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $proveedore->ciudad->nombre_ciudad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
