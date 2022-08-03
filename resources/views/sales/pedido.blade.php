@extends('templates.basics')
@section('title','Pedido')
@section('content')
    <h1>Registrar El pedido</h1>
    {{-- <form action="/example" method="POST">
        @method('PUT')
        @csrf
    </form> --}}
    <main>
        <div class="row">
          <div class="col-75">
            <div class="container">
              <form action="/action_page.php">
    
                <div class="row">
                  <div class="col-50">
                    <h3>Datos Personales</h3>
                    <label for="fname"><i class="fa fa-user"></i> Nombre completo</label>
                    <input type="text" id="fname" name="firstname" placeholder="Nombres y Apellidos">
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="text" id="email" name="email" placeholder="correo@ejemplo.com">
                    <label type="tel"><i class="fa fa-phone"></i> Teléfono</label>
                    <input type="text" id="phone" name="phonenumber" placeholder="999888777">
                    <label for="adr"><i class="fa fa-address-card-o"></i> Dirección</label>
                    <input type="text" id="adr" name="address" placeholder="Franciso Bolognesi 620">
    
    
                    <div class="row">
                      <div class="col-50">
                        <label for="state">Departamento</label>
                        <input type="text" id="state" name="state" placeholder="Lima">
                      </div>
                      <div class="col-50">
                        <label for="distrit">Distrito</label>
                        <input type="text" id="distrit" name="distrit" placeholder="Lima">
                      </div>
                    </div>
                  </div>
    
                  <label for="reference">Referencia</label>
                  <input type="text" id="reference" name="reference" placeholder="Frente a plaza San Martin">
    
                  <div class="col-50">
                    <h3>Facturación</h3>
    
                    <label for="fname">Efectivo</label>
                    <label for="efective">Ingrese monto con el que va a pagar</label>
                    <input type="text" id="efective" name="efective" placeholder="69.42">
    
                    <label for="fname">Tarjetas Aceptadas</label>
                    <img width="180px" src="{{asset('../resources/img/Tarjetas.png')}}">
    
                    <label for="cname">Nombre del propietario</label>
                    <input type="text" id="cname" name="cardname" placeholder="Javier Valle Romero">
                    <label for="ccnum">Número de tarjeta</label>
                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
    
                    <div class="row">
                      <div class="col-50">
                        <label for="expyear">Exp</label>
                        <input type="text" id="expyear" name="expyear" placeholder="MM/AA">
                      </div>
                      <div class="col-50">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv" placeholder="352">
                      </div>
                    </div>
                  </div>
    
                </div>
    
                <input type="submit" value="Continue to checkout" class="btn">
              </form>
            </div>
          </div>
    
          <div class="col-25">
            <div class="container">
              <h4>Cart
                <span class="price" style="color:black">
                  <i class="fa fa-shopping-cart"></i>
                  <b>4</b>
                </span>
              </h4>
              <p><a href="#">Product 1</a> <span class="price">$15</span></p>
              <p><a href="#">Product 2</a> <span class="price">$5</span></p>
              <p><a href="#">Product 3</a> <span class="price">$8</span></p>
              <p><a href="#">Product 4</a> <span class="price">$2</span></p>
              <hr>
              <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
            </div>
          </div>
        </div>
    </main>
@endsection