
@extends('layouts.plantilla')
@section('titulo', 'LOGIN')
@section('LOGIN')

<h1 class='display-1 text-center text-danger'> LOGIN </h1> 

        <div class='text-center'>
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control text-center" id="nombre" placeholder="Nombre">
        </div>
        <br>
        <div class="text-center">
            <label for="password">Contraseña:</label>
            <br>
            <input type="password" class="form-control text-center" id="password" placeholder="Contraseña">
            <br>

        <button type="submit" class="btn btn-primary text-center">Ingresar</button>
@endsection




