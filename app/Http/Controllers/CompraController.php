<?php

namespace App\Http\Controllers;

use App\Compra;
use App\CompraProducto;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    /**
     * Show the purchases list by user.
     *
     * @return View
     */
    public function showList()
    {
        $usuario = Auth::user()->name;
        $compras = Compra::where('usuario', $usuario)
            ->get();
        $carrito = CompraProducto::sum('cantidad');
        return view('compras', ['compras' => $compras, 'carrito' => $carrito]);
    }

    /**
     * Add the product.
     *
     * @return View
     */
    public function addProduct($id, $route)
    {
        $producto = Producto::find($id);
        $producto->stock = $producto->stock - 1;
        $producto->save();

        $usuario = Auth::user()->name;
        $compraProducto = new CompraProducto;
        $compraProducto->usuario = $usuario;
        $compraProducto->producto = $producto->codigo;
        $compraProducto->cantidad = 1;
        $compraProducto->valor = $producto->precio;
        $compraProducto->save();

        return redirect('/'.$route);
    }

    /**
     * Show the current products for purchasing by user.
     *
     * @return View
     */
    public function showProducts()
    {
        $usuario = Auth::user()->name;
        $productos = CompraProducto::where('usuario', $usuario)
            ->get();
        return view('comprarProductos', ['productos' => $productos]);
    }

    /**
     * Add the purcahse.
     *
     * @return View
     */
    public function addPurchase()
    {
        $usuario = Auth::user()->name;
        $compraProducto = CompraProducto::where('usuario', $usuario)
            ->get();

        $numero = Compra::where('usuario', $usuario)->max('numero');
        $cantidad = 0;
        $valor = 0;
        foreach ($compraProducto as $producto) {
            $cantidad += $producto->cantidad;
            $valor += $producto->valor;
            CompraProducto::destroy($producto->id);
        }
        $compra = new Compra;
        $compra->numero = $numero + 1;
        $compra->usuario = $usuario;
        $compra->cantidad = $cantidad;
        $compra->valor = $valor;
        $compra->save();

        return redirect('/home');
    }
}
