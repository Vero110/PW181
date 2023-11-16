@extends('layouts.plantilla')

@section('titulo','Recuerdos')


@section('Contenido')
<h1 class = "display-1 text-center text-dark"> Recuerdos </h1> 
@foreach ($consR as $item)
<div class="container mt-5 col-md-6 ">
        <div class="card">
        <h5 class="card-header text-center fw-medium">
        {{ $item->titulo }}
        </h5>
        <div class="card-body">
        <h5 class="card-title fw-medium">{{$item->fecha }}</h5>
        <p class="card-text fw-ligther">{{ $item->recuerdo }}</p>
        <a href="#" class="btn btn-primary">Editar</a>
        <a href="#" class="btn btn-primary">Borrar</a>

        </div>
    </div> 
</div>   
@endforeach    

@endsection 


