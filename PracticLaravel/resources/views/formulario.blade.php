@extends('layouts.plantilla')

@section('titulo','Formulario')


@section('Contenido')
<h1 class = "display-1 text-center text-info"> Formulario </h1>  

<div class="container mt-5 col-md-6">  <!--abre del contenedor-->

  @if(session()->has('confirmacion'))

  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong> {{session('confirmacion')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @endif
  <!--errores-->
{{--   @if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> {{ $error }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
  @endif --}}

<div class="card">  <!--abre la tarjeta-->

    <div class="card-header fs-4 fw-medium text-primary-emphasis text-center">
      Introduce aquí tus memorias
    </div>

    <div class="card-body">
        <form method="POST" action="/recuerdo">
          @csrf
            <div class="mb-3">
              <label class="form-label">Titulo:</label>
              <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo')}}">
              <p class="text-danger fst-italic fw-bold"> {{$errors->first('txtTitulo')}}
            </div>

            <div class="mb-3">
                <label class="form-label">Recuerdo:</label>
                <input type="text" name="txtRecuerdo" class="form-control" value="{{ old('txtRecuerdo')}}">
                <p class="text-danger fst-italic fw-bold"> {{$errors->first('txtRecuerdo')}}
            </div>
    </div>
    <div class="card-footer text-body-secondary text-center">
        <div class="d-grid gap-2">
        <button type="submit" class="btn btn-outline-info">Guardar recuerdo</button>
    </form>
    </div>
  </div>  <!--cierre de la tarjeta-->
</div> <!--cierre del contenedor-->

@endsection 
