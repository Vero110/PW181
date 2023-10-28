@extends('layouts.plantilla')

@section('titulo','Pagina Principal')
@section('Contenido')

<h1 class = " text-center text-info fst-italic fw-bold"> Noticia Literaria </h1> 

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <img src="{{ asset('imagen/imagen1.jpg')}}" style="width: 330px; height: 260px; "  class="img-thumbnail" alt="Imagen de la noticia">
                <div class="card-body">
                    <h5 class="card-title">Premio Nacional de Ensayo 2023 </h5>
                    <p class="card-text">Antonio Monegal (Barcelona, 66 años) ha sido galardonado con el Premio Nacional de Ensayo 2023.
                         Se se ha otorgado hoy miércoles por su obra Como el aire que respiramos: el sentido de la cultura. 
                         El premio, concedido por el Ministerio de Cultura y Deporte, está dotado con 30.000 euros. 
                         El jurado ha destacado su obra “por la excelencia del estilo y la creatividad, y por poner el 
                         foco de atención en el concepto amplio y en el carácter integrador de la cultura, que permite comprender 
                         y definir lo que somos y hacemos: un fenómeno que da sentido a nuestra sociedad”..</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 


