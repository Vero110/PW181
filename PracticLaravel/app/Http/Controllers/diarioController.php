<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRecuerdos;

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
    public function guardarRecuerdo(validadorFormRecuerdos $req){
       /*  $validated = $req->validate([
            'txtTitulo' => 'required|max:25',
            'txtRecuerdo' => 'required|min:4',
        ]); */

        return $req->all();

        #MUESTRAME LA IP QUE UTILIZA ESA RUTA
        /* echo "<p>";
        echo $req->ip();
        echo " - "; 
        echo $req->path();
        echo " - "; 
        echo $req->method();
        echo " - "; 
        echo $req->input('txtTitulo');
        echo "</p>"; */

    }
}
