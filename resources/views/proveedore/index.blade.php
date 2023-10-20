@extends('layouts.app')

@section('template_title')
Proveedores
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Proveedores') }}
                        </span>
                        <form action="{{ route('proveedores.index') }}" method="GET">
                            <div class="btn-group">
                                <input type="text" name="busqueda" class="form-control">
                                <input type="submit" value="enviar" class="btn btn-info">
                            </div>
                        </form>
                    </div>
                    <div class="float-left">
                        <a href="{{ route('proveedores.create') }}" class="btn btn-primary btn-sm float-right"
                            data-placement="left">
                            {{ __('Create New') }}
                        </a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Documento</th>
                                    <th>Tipo Documento</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Nombre Comercial</th>
                                    <th>Direccion</th>
                                    <th>Ciudad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $proveedore)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $proveedore->documento }}</td>
                                    <td>{{ $proveedore->tipoDocumento->descripcion }}</td>
                                    <td>{{ $proveedore->nombre }}</td>
                                    <td>{{ $proveedore->apellido }}</td>
                                    <td>{{ $proveedore->nombre_comercial }}</td>
                                    <td>{{ $proveedore->direccion }}</td>
                                    <td>{{ $proveedore->ciudad->nombre_ciudad }}</td>

                                    <td>
                                        <form action="{{ route('proveedores.destroy',$proveedore->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('proveedores.show',$proveedore->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('proveedores.edit',$proveedore->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $proveedores->links() !!}
        </div>
    </div>
</div>
@endsection