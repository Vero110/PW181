<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbooks= libro::all();
        return view('libros.index', compact('allbooks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addLibro= new libro();
        $addLibro->titulo= $request->txttit;
        $addLibro->autor= $request->txtaut;
        $addLibro->pagina= $request->txtpag;
        $addLibro->anio= $request->txtan;
        $addLibro->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        /**buscar un libro que venga con ese id, para proceder a hacer los cambios*/
        $upLibro= libro::find($id);
        $upLibro->titulo= $request->txttit;
        $upLibro->autor= $request->txtaut;
        $upLibro->pagina= $request->txtpag;
        $upLibro->anio= $request->txtan;

        $upLibro->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dlLibro= libro::find($id);
        $dlLibro-> delete();

        return redirect()->back();
    }
}
