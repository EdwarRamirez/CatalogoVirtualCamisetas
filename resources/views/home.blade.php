@extends('layouts.app')

@section('content')
<div class="container">
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
                        <div class="col">
                            <div class="card border-info">
                                <img src="{{asset('storage/home-hombre1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">REF: menBlack01</h5>
                                    <a href="#" class="btn btn-primary">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-info">
                                <img src="{{asset('storage/home-hombre2.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">REF: menWhite01</h5>
                                    <a href="#" class="btn btn-primary">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-info">
                                <img src="{{asset('storage/home-hombre3.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">REF: menWhite02</h5>
                                    <a href="#" class="btn btn-primary">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-info">
                                <img src="{{asset('storage/home-hombre4.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">REF: menLightBlue01</h5>
                                    <a href="#" class="btn btn-primary">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">...</div>
                <div class="tab-pane fade" id="nav-kids" role="tabpanel" aria-labelledby="nav-kids-tab">...</div>
            </div>
        </div>
    </div>
</div>
@endsection
