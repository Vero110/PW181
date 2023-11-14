<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;
use App\Http\request\validacion;

class controladorVJ extends Controller
{
    public function videojuego(){
        return view('welcome');
    }

    public function guardarregistro(validacion $req){
        $validated = $req->validate([
             'txtNombre' => 'required|min:5',
             'txtFecha' => 'required|date',
             'txtVideojuegos' => 'required|max:7',

         ]);}
}
