<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Metodo para listar todos los usuarios
    public function listUsers(){
        return view('users.listUsers');
    }
    
    // Metodo para visualizar un usuario
    public function listUser( $id ){
        return view('users.listUser', ['id' => $id]);
    }
    
    // Metodo para crear un usuario
    public function createUser(){
        return view('users.createUser');
    }
    
    // Metodo para modificar un usuario
    public function modifyUser( $id ){
        return view('users.modifyUser', compact('id'));
    }
    
    // Meotodo para eliminar un usuario
    public function deleteUser( $id ){
        return view('users.deleteUser', compact('id'));
    }

}
