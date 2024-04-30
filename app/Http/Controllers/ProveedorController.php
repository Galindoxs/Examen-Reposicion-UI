<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function mostrarProveedor(){
        $proveedores = Proveedor::all();
      
        return view('proveedores', compact('proveedores'));//Agregar Vista
    }

    public function nuevoProveedor(){
        return view('crearProveedor');
    }

    public function crearProveedor(Request $request){
        $proveedor = new Proveedor();

        $proveedor->nombre = $request->input('nombre');
        $proveedor->fecharegistro = $request->input('fecharegistro');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->correo = $request->input('correo');

        $proveedor->save();

        return redirect('proveedores');
    }
}
