@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Lista de compras hechas por el usuario {{ Auth::user()->name }}</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Número</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($compras as $compra)
                        <tr>
                            <th scope="row">{{$compra->numero}}</th>
                            <td>{{$compra->usuario}}</td>
                            <td>{{$compra->created_at}}</td>
                            <td>{{$compra->cantidad}}</td>
                            <td>${{$compra->valor}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
