<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Bootstrap Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row m-2">
                <div class="col">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Catalogo Virtual') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">

                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row m-2">
                <div class="col">
                    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('storage/welcome-camisetas-hombres.jpg')}}" class="mx-auto d-block" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Camisetas Hombre</h5>
                                    <p>Contamos con productos de alta calidad y con los diseños mas exclusivos del mercado.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('storage/welcome-camisetas-mujeres.jpg')}}" class="mx-auto d-block" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Camisetas Mujer</h5>
                                    <p>Contamos con prendas que estan siempre a la moda y que resaltan la belleza de la mujer.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('storage/welcome-camisetas-niños.jpg')}}" class="mx-auto d-block" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Camisetas Niños</h5>
                                    <p>Para los mas chicos tenemos las mejores prendas que a tus niños les va a encantar.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
