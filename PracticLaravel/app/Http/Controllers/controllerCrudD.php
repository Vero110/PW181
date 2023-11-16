<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRecuerdos;
use DB; 
use Carbon\Carbon;

class controllerCrudD extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inicio()
    {
        
        return view('welcome');

    }
    public function index()
    {
        $consR= DB::table('tb_recuerdos')->get();
        
        return view('recuerdos', compact('consR'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //regresar a la vista
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorFormRecuerdos $request)
    {
        DB::table('tb_recuerdos')->insert([
            "titulo" => $request->input('txtTitulo'),
            "recuerdo" => $request->input('txtRecuerdo'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('/recuerdo/create')->with('confirmacion','Tu recuerdo llego al controlador');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
