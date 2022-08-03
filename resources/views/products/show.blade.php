@extends('templates.basics')
@section('title','Nombre del Producto')
@section('content')
    <h1>Detalles del producto seleccionado</h1>
    {{dd($producto)}}
@endsection