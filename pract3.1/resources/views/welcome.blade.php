@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('Contenido')

<h1 class="display-1 text-center text-danger">Práctica 3.1</h1>

<x-offcanvas></x-offcanvas>
<x-mensaje mensaje="Este es el welcome" fecha="11/10/23"></x-mensaje>

@endsection