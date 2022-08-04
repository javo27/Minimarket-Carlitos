@extends('templates.basics')
@section('title','Home Minimarket Carlitos')
@section('content')
    <main>
        <div class="hero">
            <div class="hero-c">
                <div class="flexbox">
                    <img width="450px" class="home-hero-1" src="{{asset('../resources/img/home-hero-1.png')}}" alt="Minimarket Carlitos">
                    <img width="300px" class="home-hero-2" src="{{asset('../resources/img/home-hero-2.png')}}" alt="Minimarket Carlitos">
                    <h2 class="hero-food">FOOD</h2>
                    <div class="hero-text">
                        <h2 class="hero-super">Super</h2>
                        <h2 class="hero-promociones">Promociones</h2>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <a href="{{route('AllProducts')}}">Mostrar todos los productos</a>
    <a href="{{route('CategoryProducts',3)}}">Mostrar todos por Categoria</a>
    <a href="{{route('OneProduct', 262)}}">Mostrar detalles de un producto</a>
    <a href="{{route('PlaceOrder')}}">Registrar pedido</a>

@endsection