@extends('layouts.plantilla')

@section('titulo', 'Registro de Libros')

@section('Contenido')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <h1 class="text-center text-info fst-italic fw-bold">Registro de Libros</h1>
    <div class="container mt-5">
        <script>
            @if(session()->has('confirmacion'))
            
              Swal.fire({
                icon:'success',
                title: 'El libro "{{ session('confirmacion') }}" se guardó',
                showConfirmButton: false,
                timer: 1500
            })
    
            @php
                session()->forget('confirmacion');
            @endphp
            
            @endif
          </script>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-info"> 
                    <form method="POST" action="/Guardar">
                        @csrf
                        <div class="card-body">
                            <h2 class="card-title text-center">Ingresa un nuevo libro:</h2>
                            <div class="mb-3">
                                <label for="txtISBN" class="form-label">ISBN:</label>
                                <input type="number" id="txtISBN" name="txtISBN" class="form-control" value="{{ old('txtISBN') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtISBN') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtTitulo" class="form-label">Título:</label>
                                <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtTitulo') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtAutor" class="form-label">Autor:</label>
                                <input type text="text" name="txtAutor" class="form-control" value="{{ old('txtAutor') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtAutor') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtPaginas" class="form-label">Páginas:</label>
                                <input type="number" name="txtPaginas" class="form-control" value="{{ old('txtPaginas') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtPaginas') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtEditorial" class="form-label">Editorial:</label>
                                <input type="text" name="txtEditorial" class="form-control" value="{{ old('txtEditorial') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtEditorial') }}</p>
                            </div>

                            <div class="mb-3">
                                <label for="txtEmailEditorial" class="form-label">Email de la editorial:</label>
                                <input type="text" name="txtEmailEditorial" class="form-control" value="{{ old('txtEmailEditorial') }}" required>
                                <p class="text-danger fst-italic fw-bold">{{ $errors->first('txtEmailEditorial') }}</p>
                            </div>
                        </div>

                        <div class="card-footer text-body-secondary text-center">
                            <button type="submit" class="btn btn-info btn-sm">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


