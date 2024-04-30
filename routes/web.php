<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/empleados', [EmpleadoController:: class, 'mostraEmpleados'])->name('Empleados.mostrar');

Route::get('/empleados/nuevo', [EmpleadoController::class, 'nuevoEmpleado'])->name('Empleados.nuevo');

Route::post('/empleados/crear', [EmpleadoController:: class, 'crearEmpleado'])->name('Empleados.crear');

Route::get('/productos', [ProductoController::class, 'mostrarProductos'])->name('Productos.mostrar');

Route::get('/productos/nuevo', [ProductoController::class, 'nuevoProducto'])->name('Productos.nuevo');

Route::post('/productos/crear', [ProductoController::class, 'crearProducto'])->name('Productos.crear');

Route::get('/proveedores', [ProveedorController::class, 'mostrarProveedor'])->name('Proveedores.mostrar');

Route::get('/proveedores/nuevo', [ProveedorController::class, 'nuevoProveedor'])->name('Proveedores.nuevo');

Route::post('/proveedores/crear', [ProveedorController::class, 'crearProveedor'])->name('Proveedores.crear');
