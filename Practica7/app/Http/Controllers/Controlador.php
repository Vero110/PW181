<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validacion;

class Controlador extends Controller
{
    public function PaginaPrincipal(){
        return view('vistaprincipal');
    }
    public function Registro(){
        return view('registro');
    }
    public function Guardar(validacion $req){ 
        $nombreLibro = $req->input('txtTitulo'); 
        session()->flash('confirmacion', $nombreLibro);
        return redirect('/registro');
    }
}

