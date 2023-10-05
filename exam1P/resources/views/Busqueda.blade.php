@extends('layouts.plantilla')
@section('titulo', 'Busqueda')
@section('LOGIN')

<div class="card text-center" style="width: 18rem; ">
    <div class="card-body text-center">
      <h5 class="card-title">Card </h5>
      <p class="card-text">HOLA, EXAMEN PRIMER PARCIAL.</p>
    </div>
</div>

<h1 class='display-1 text-center text-danger'> BUSQUEDAD </h1> 
        <div class="text-center">
            <label for="nombre">¿Qué prodcuto desea buscar?</label>
            <br>
            <input type="text" class="text-center" id="nombre" placeholder="Producto">
        </div>

        <button type="submit" class="btn btn-primary text-center">Buscar</button>
@endsection

 