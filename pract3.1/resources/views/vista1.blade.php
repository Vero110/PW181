@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('Contenido')

<h1 class="display-1 text-center text-danger">Vista 1</h1>

<x-card></x-card>


<x-mensaje mensaje="Este es la vista 1" fecha="11/10/23"></x-mensaje>

@endsection