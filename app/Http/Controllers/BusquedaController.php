<?php

namespace App\Http\Controllers;

use App\CompraProducto;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusquedaController extends Controller
{
    /**
     * Show the advance searching form.
     *
     * @return View
     */
    public function show()
    {
        $carrito = CompraProducto::sum('cantidad');
        return view('busqueda', ['productos' => Producto::all(), 'filtro' => '', 'carrito' => $carrito]);
    }

    /**
     * Search the products with a specific filter.
     *
     * @return View
     */
    public function search($filtro)
    {
        $condicion = substr($filtro, 0, -1);
        $condicion = str_replace("|", " AND ", $condicion);
        $productos = DB::table('productos')
            ->whereRaw($condicion)
            ->get();
        $carrito = CompraProducto::sum('cantidad');
        return view('busqueda', ['productos' => $productos, 'filtro' => $filtro, 'carrito' => $carrito]);
    }
}
