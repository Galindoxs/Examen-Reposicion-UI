<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function mostrarProductos(){
        $productos = Producto::all();

        return view('productos', compact('productos'));//Agregar Vista
    }

    public function nuevoProducto(){
        return view('crearProducto');
    }

    public function crearProducto(Request $request){

        $producto = new Producto();

        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->pagaisv = false;

        $producto->save();

        return redirect('productos');

    }
}
