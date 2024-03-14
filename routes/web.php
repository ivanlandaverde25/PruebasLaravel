<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta principal
Route::get('/', HomeController::class);

// Rutas para usuarios
Route::controller(UserController::class)->group( function(){
    // Listar Usuarios
    Route::get('listUsers', 'listUsers');
    
    // Listar un usuario en especifico
    Route::get('listUsers/{id}', 'listUser');

    // Crear un usuario
    Route::get('listUsers/create', 'createUser');
    
    // Modificar un usuario
    Route::get('listUsers/modifyUser/{id}', 'modifyUser');
    
    // Eliminar un usuario
    Route::get('listUsers/deleteUser/{id}', 'deleteUser');
});