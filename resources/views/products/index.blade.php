@extends('templates.basics')
@section('title','Productos del Minimarket Carlitos')
@section('content')
    <main>
        <div class="catalogo-titulo">Productos del Minimarket Carlitos</div>
        <div class="catalogo-banner">
            <img src="{{asset('../resources/img/catalogo-banner.png')}}" alt="Catalogo Minimarket Carlitos">
        </div>
        <div class="catalogo-buscar">
            <form action="{{route('SimilarNameProducts')}}">
                <input type="text" name="nombre-buscar" placeholder="Search..." />
                <button type="submit" class="button">Buscar</button>
            </form>
            
        </div>
        <div class="container-productos-filtro">
            <div class="filtro-productos">
                <h3>Nuestras Categorias</h3>
                <ul>
                    @foreach($categorias as $categoria)
                    <li>
                        <a href="{{route('CategoryProducts',$categoria->idCategoria)}}">{{$categoria->nomCategoria}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="catalogo-container">
                @foreach($productos as $producto)
                {{-- {{$imagenurl='../resources/imagenes/'.$producto->imagen}} --}}
                <div class="caja caja1">
                    <img src="{{asset('../resources/imagenes/'.$producto->imagen)}}" />
                    <p>{{$producto->nomProducto}}</p>
                    <h1>S/. {{$producto->precio}}</h1>
                    <a href="{{route('OneProduct',$producto->idProducto)}}" class="button">Agregar</a>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection