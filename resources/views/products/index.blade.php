@extends('templates.basics')
@section('title','Productos del Minimarket Carlitos')
@section('content')
    <main>
        <div class="catalogo-titulo">Productos del Minimarket Carlitos</div>
        <div class="catalogo-banner">
            <img src="{{asset('/img/catalogo-banner.png')}}" alt="Catalogo Minimarket Carlitos">
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
                {{-- {{$imagenurl='/imagenes/'.$producto->imagen}} --}} 
                <div class="producto-modal hide">
                    <div class="mostrar-producto">
                        <span class="closeModal">&times</span>
                        <div class="info-producto">
                            <div class="producto-izquierda">
                                <img src="{{asset('/imagenes/'.$producto->imagen)}}" />
                            </div>
                            <div class="producto-derecha">
                                <p>{{$producto->nomProducto}}</p>
                                <p>{{$producto->descProducto}}</p>
                                <h1>S/. {{$producto->precio}}</h1>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $producto->idProducto }}" id="id" name="id">
                                    <input type="hidden" value="{{ $producto->nomProducto }}" id="name" name="name">
                                    <input type="hidden" value="{{ $producto->precio }}" id="price" name="price">
                                    <input type="hidden" value="{{ $producto->imagen }}" id="img" name="img">
                                    <div>
                                        <label for="">Elija la Cantidad: </label>
                                        <input class="input-cantidad" type="number" value="1" min="1" max="{{ $producto->stock }}" id="quantity" name="quantity">
                                    </div>
                                    <button class="btn btn-secondary btn-sm" class="tooltip-test" title="Agregar al carrito">
                                        <i class="fa fa-shopping-cart"></i> Agregar al Carrito
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="caja caja1">
                    <img src="{{asset('/imagenes/'.$producto->imagen)}}" />
                    <p>{{$producto->nomProducto}}</p>
                    <h1>S/. {{$producto->precio}}</h1>
                    <a class="button abrir-modal">Agregar</a>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection