@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Productos para comprar</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $totalUnidades = 0;
                            $valorTotal = 0;
                        @endphp
                        @foreach ($productos as $producto)
                        <tr>
                            <th>{{$producto->producto}}</th>
                            <td>{{$producto->cantidad}}</td>
                            <td>${{$producto->valor}}</td>
                        </tr>
                        @php
                            $totalUnidades += $producto->cantidad;
                            $valorTotal += $producto->valor;
                        @endphp
                        @endforeach
                    </tbody>
                    <thead>
                        <tr>
                            <th scope="row">Totales</th>
                            <td>{{$totalUnidades}}</td>
                            <td>${{$valorTotal}}</td>
                        </tr>
                    </thead>
                </table>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-primary" href="/comprarProductos" role="button">Comprar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
