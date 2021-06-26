<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hombres = Producto::where('categoria', 'Hombre')->get();
        $mujeres = Producto::where('categoria', 'Mujer')->get();
        $niños = Producto::where('categoria', 'Niño')->get();
        return view('home', ['hombres' => $hombres,'mujeres' => $mujeres,'niños' => $niños]);
    }
}
