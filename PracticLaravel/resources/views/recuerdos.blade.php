@extends('layouts.plantilla')

@section('titulo', 'Recuerdos')

@section('Contenido')
    <h1 class="display-1 text-center text-dark"> Recuerdos </h1>

    <div class="container mt-5 col-md-6 ">

        @if(session()->has('confirmacion'))

            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong> {{session('confirmacion')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif

        @foreach ($consR as $item)
            <div class="card">
                <h5 class="card-header text-center fw-medium">
                    {{ $item->titulo }}
                </h5>

                <div class="card-body">
                    <h5 class="card-title fw-medium">{{$item->fecha }}</h5>
                    <p class="card-text fw-ligther">{{ $item->recuerdo }}</p>
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#editar{{$item->id}}">
                        Editar
                    </button>
                    
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$item->id}}">
                      Borrar
                    </button>

                </div>
            </div>
            @include('partials.modal')
            @include('partials.modalE')
        @endforeach
    </div>

@endsection



