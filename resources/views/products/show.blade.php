@extends('templates.basics')
@section('title','Nombre del Producto')
@section('content')
    <h1>Detalles del producto seleccionado</h1>
    <script type="text/javascript">
        var user = @json($producto);
        console.log(user);
    </script>
    <div class="caja caja1 store">
        <form>
            @csrf
            
        </form>
        <img src="{{asset('../resources/imagenes/'.$producto->imagen)}}" />
        <p>{{$producto->nomProducto}}</p>
        <h1>S/. {{$producto->precio}}</h1>
        <input type="number" min="1" max="{{$producto->stock}}" value="1">
        <button class="button agregar-carrito">Agregar al carrito</button>
        
    </div>
@endsection