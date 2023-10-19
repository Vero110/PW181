<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }
    public function metodoFormulatio(){
        return view('formulario');
    }
    public function metodoRecuerdos(){
        return view('recuerdos');
    }
    public function guardarRecuerdo(Request $req){
        //return $req->all();

        #MUESTRAME LA IP QUE UTILIZA ESA RUTA
        echo "<p>";
        echo $req->ip();
        echo " - "; 
        echo $req->path();
        echo " - "; 
        echo $req->method();
        echo " - "; 
        echo $req->input('txtTitulo');
        echo "</p>";

    }
}
