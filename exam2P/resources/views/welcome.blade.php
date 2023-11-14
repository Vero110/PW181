@extends('layouts.plantilla')

@section('titulo', '')

@section('Contenido')

<div class="container mt-5 col-md-6">  

  @if(session()->has('confirmacion'))

  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong> {{session('confirmacion')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @endif

<div class="card">  
    <div class="card-header fw-medium text-primary-emphasis text-center">
    </div>
    <div class="card-body">
        <form method="POST" action="/guardarregistro">
          @csrf
            <div class="mb-3">
              <label class="form-label">Nombre:</label>
              <input type="textNombre" name="textNombre" class="form-control" value="{{ old('textNombre')}}">
              <p class="text-danger fst-italic fw-bold"> {{$errors->first('textNombre')}}
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha de Publicacion:</label>
                <input type="textFecha" name="textFecha" class="form-control" value="{{ old('textFecha')}}">
                <p class="text-danger fst-italic fw-bold"> {{$errors->first('textFecha')}}
            </div>

            <div class="mb-3">
                <label class="form-label">Videojuegos Vendidos:</label>
                <input type="txtVideojuegos" name="txtVideojuegos" class="form-control" value="{{ old('txtVideojuegos')}}">
                <p class="text-danger fst-italic fw-bold"> {{$errors->first('txtVideojuegos')}}
            </div>
            <div class="card text-body text-center">
                <div class="d-grid gap-2">
                <button type="submit" class="btn">Guardar registro</button>
            </form>
            </div>
        </div>  
        </div> 

@endsection 




