@extends('layouts.app')

@section('content')
<div class="container">
    <input type="hidden" id="produtosComprados" name="produtosComprados" value="{{$productos}}">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-men-tab" data-bs-toggle="tab" data-bs-target="#nav-men" type="button" role="tab" aria-controls="nav-men" aria-selected="true">{{ __('Camisetas Hombres') }}</button>
                    <button class="nav-link" id="nav-women-tab" data-bs-toggle="tab" data-bs-target="#nav-women" type="button" role="tab" aria-controls="nav-women" aria-selected="false">{{ __('Camisetas Mujeres') }}</button>
                    <button class="nav-link" id="nav-kids-tab" data-bs-toggle="tab" data-bs-target="#nav-kids" type="button" role="tab" aria-controls="nav-kids" aria-selected="false">{{ __('Camisetas Niños') }}</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-men" role="tabpanel" aria-labelledby="nav-men-tab">
                    <div class="row row-cols-1 row-cols-md-2 g-4 m-2">
                        @foreach ($hombres as $hombre)
                            <div class="col">
                                <div class="card border-info">
                                    <img src="{{asset('storage/'.$hombre->imagen)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">REF: {{$hombre->codigo}}</h5>
                                        <p>{{$hombre->nombre}}</p>
                                        <p>Precio: ${{$hombre->precio}}</p>
                                        @if ($hombre->stock > 0)
                                        <p>Stock: {{$hombre->stock}}</p>
                                        <a href="/agregarProducto/{{$hombre->id}}/home" class="btn btn-primary">Agregar al carrito</a>
                                        @else
                                        <p>Stock <span class="badge bg-danger">Agotado</span></p>
                                        <a href="" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Agregar al carrito</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">
                    <div class="row row-cols-1 row-cols-md-2 g-4 m-2">
                        @foreach ($mujeres as $mujer)
                            <div class="col">
                                <div class="card border-danger">
                                    <img src="{{asset('storage/'.$mujer->imagen)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">REF: {{$mujer->codigo}}</h5>
                                        <p>{{$mujer->nombre}}</p>
                                        <p>Precio: ${{$mujer->precio}}</p>
                                        @if ($mujer->stock > 0)
                                        <p>Stock: {{$mujer->stock}}</p>
                                        <a href="#" class="btn btn-primary">Comprar</a>
                                        @else
                                        <p>Stock <span class="badge bg-danger">Agotado</span></p>
                                        <a href="#" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Comprar</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-kids" role="tabpanel" aria-labelledby="nav-kids-tab">
                    <div class="row row-cols-1 row-cols-md-2 g-4 m-2">
                        @foreach ($niños as $niño)
                            <div class="col">
                                <div class="card border-warning">
                                    <img src="{{asset('storage/'.$niño->imagen)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">REF: {{$niño->codigo}}</h5>
                                        <p>{{$niño->nombre}}</p>
                                        <p>Precio: ${{$niño->precio}}</p>
                                        @if ($niño->stock > 0)
                                        <p>Stock: {{$niño->stock}}</p>
                                        <a href="#" class="btn btn-primary">Comprar</a>
                                        @else
                                        <p>Stock <span class="badge bg-danger">Agotado</span></p>
                                        <a href="#" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Comprar</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
