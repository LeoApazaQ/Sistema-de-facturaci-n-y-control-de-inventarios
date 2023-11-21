@extends('layouts.app')

@section('title')
    Factura
@endsection

@section('content')
    

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Información del Cliente</h2>
            <address>
                <strong>Nombre del Cliente</strong><br>
                Dirección del Cliente<br>
                Ciudad, Estado, Código Postal<br>
                Teléfono: 123-456-7890
            </address>
        </div>
        <div class="col-md-6 text-right">
            <h2>Detalles de la Factura</h2>
            <p><strong>Fecha:</strong> <!-- fecha actual --> </p>
            <p><strong>Número de Factura:</strong> <!-- fecha actual -->  </p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h2>Productos/Servicios</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Producto 1</td>
                        <td>2</td>
                        <td>$50.00</td>
                        <td>$100.00</td>
                    </tr>
                    <tr>
                        <td>Producto 2</td>
                        <td>1</td>
                        <td>$30.00</td>
                        <td>$30.00</td>
                    </tr>
                    <!-- agregar más filas según sea necesario -->
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6 offset-md-6 text-right">
            <p><strong>Subtotal:</strong> $130.00</p>
            <p><strong>Impuestos (10%):</strong> $13.00</p>
            <h3>Total: $143.00</h3>
        </div>
    </div>
</div>

</body>
</html>



@endsection