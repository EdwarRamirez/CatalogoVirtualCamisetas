@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <input type="hidden" id="filtros" name="filtros" value="{{$filtro}}">
                <h4 id="filtrosBusqueda">
                    Filtros:
                </h4>
                <a class="btn btn-outline-primary btn-sm" href="" role="button" id="linkFiltro">Buscar</a>
                <div class="accordion" id="accordionPanelsBusqueda">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingBusqueda">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseBusqueda" aria-expanded="true" aria-controls="panelsStayOpen-collapseBusqueda">
                                Categoria
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseBusqueda" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingBusqueda">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'categoria');">Hombre</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'categoria');">Mujer</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'categoria');">Niño</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTalla">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTalla" aria-expanded="false" aria-controls="panelsStayOpen-collapseTalla">
                                Talla
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTalla" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTalla">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'talla');">XS</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'talla');">S</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'talla');">M</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'talla');">L</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'talla');">XL</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'talla');">06</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'talla');">08</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'talla');">10</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'talla');">12</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingColor">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseColor" aria-expanded="false" aria-controls="panelsStayOpen-collapseColor">
                                Color
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseColor" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingColor">
                            <div class="accordion-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Azul</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Azul Claro</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Azul Oscuro</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Azul Turquesa</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Blanco</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Gris</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Negro</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Rojo</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Rosa</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Rosa Claro</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" class="btn btn-link" style="color: black; text-decoration-line: blink;" onclick="mostrarFiltro(this, 'color');">Vinotinto</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row m-2">
                    @foreach ($productos as $producto)
                        <div class="col">
                            <div class="card border-secondary">
                                <img src="{{asset('storage/'.$producto->imagen)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">REF: {{$producto->codigo}}</h5>
                                    <p>{{$producto->nombre}}</p>
                                    <p>Precio: ${{$producto->precio}}</p>
                                    @if ($producto->stock > 0)
                                    <p>Stock: {{$producto->stock}}</p>
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
@endsection
@section('scripts')
    <script src="{{ asset('js/busqueda.js') }}"></script>
@endsection
