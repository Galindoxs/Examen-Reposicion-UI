<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{

    public function mostraEmpleados(){
        $empleados = Empleado::all();
        return view('empleados', compact('empleados')); //Agregar Vista

    }

    public function nuevoEmpleado(){
        return view('crearEmpleado');
    }

    public function crearEmpleado(Request $request){

        $empleado = new Empleado();

        $empleado->idprestamo = $request->input('idprestamo');
        $empleado->nombre = $request->input('nombre');
        $empleado->apellido = $request->input('apellido');
        $empleado->fechaingreso = $request->input('fechaingreso');
        $empleado->salario = $request->input('salario');

        $empleado->save();

        return redirect('empleados');
    }
}
