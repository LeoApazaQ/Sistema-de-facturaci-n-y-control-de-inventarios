@extends('layouts.app')

@section('template_title')
    Forma Pago
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Forma Pago') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('forma_pagos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        
										<th>Descripcion Forma Pago</th>

                                        <th style="width: 500px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formaPagos as $formaPago)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $formaPago->descripcion_forma_pago }}</td>

                                            <td>
                                                <form action="{{ route('forma_pagos.destroy',$formaPago->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('forma_pagos.show',$formaPago->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('forma_pagos.edit',$formaPago->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $formaPagos->links() !!}
            </div>
        </div>
    </div>
@endsection
