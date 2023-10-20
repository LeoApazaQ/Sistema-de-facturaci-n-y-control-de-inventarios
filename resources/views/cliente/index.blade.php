@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>
                            <form action="{{ route('clientes.index') }}" method="GET">
                                <div class="btn-group">
                                    <input type="text" name="busqueda" class="form-control">
                                    <input type="submit" value="enviar" class="btn btn-info">
                                </div>
                            </form>
                        </div>
                        <div class="float-left">
                            <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Nuevo cliente') }}
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
                                        <th>Cod Tipo Documento</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Direccion</th>
                                        <th>Ciudad</th>
                                        <th>Telefono</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $cliente->documento }}</td>
                                            <td>{{ $cliente->tipoDocumento->descripcion }}</td>
                                            <td>{{ $cliente->nombres }}</td>
                                            <td>{{ $cliente->apellidos }}</td>
                                            <td>{{ $cliente->direccion }}</td>
                                            <td>{{ $cliente->ciudad->nombre_ciudad }}</td>
                                            <td>{{ $cliente->telefono }}</td>
                                            <td>
                                                <form action="{{ route('clientes.destroy', $cliente->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('clientes.show', $cliente->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('clientes.edit', $cliente->id) }}"><i
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
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
