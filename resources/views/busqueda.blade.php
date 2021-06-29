@extends('layouts.app')

@section('content')
    <div class="container">
        <input type="hidden" id="produtosComprados" name="produtosComprados" value="{{$carrito}}">
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
                    @forelse ($productos as $producto)
                        <div class="col">
                            <div class="card border-secondary">
                                <img src="{{asset('storage/'.$producto->imagen)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">REF: {{$producto->codigo}}</h5>
                                    <p>{{$producto->nombre}}</p>
                                    <p>Precio: ${{$producto->precio}}</p>
                                    @if ($producto->stock > 0)
                                    <p>Stock: {{$producto->stock}}</p>
                                    <a href="/agregarProducto/{{$producto->id}}/busqueda" class="btn btn-primary">Agregar</a>
                                    @else
                                    <p>Stock <span class="badge bg-danger">Agotado</span></p>
                                    <a href="" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Agregar</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </symbol>
                        </svg>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill"/>
                            </svg>
                            <div>
                                No exiten productos!!!
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/busqueda.js') }}"></script>
@endsection
