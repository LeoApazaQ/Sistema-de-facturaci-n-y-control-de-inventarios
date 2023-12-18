@extends('layouts.app')

@section('template_title')
    {{ $formaPago->name ?? "{{ __('Show') Forma Pago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Forma Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('forma_pagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion Forma Pago:</strong>
                            {{ $formaPago->descripcion_forma_pago }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
