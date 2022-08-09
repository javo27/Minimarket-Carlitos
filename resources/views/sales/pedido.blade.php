@extends('templates.basics')
@section('title','Pedido')
@section('content')
    <main>
    <h2 class="centrar-titulo">Registrar Pedido</h2>
    <section class="contenedor-pedido">
        <div class="formulario-pedido">
              <form action="{{ route('SendOrder') }}" method="POST">
                {{ csrf_field() }}
                <div class="info-personal form-section">
                    <div class="content">
                        <h4>Datos Personales</h4>
                        <span class="openSection"><img src="{{asset('/img/ordenar-abajo.png')}}" alt=""></span>
                    </div>
                    <div class="contenido hide">
                        <label for="nombres">Nombres:</label>
                        <input type="text" name="nombres" id="nombres" placeholder="Ingrese sus Nombres">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus Apellidos">
                        <label for="correo">Correo:</label>
                        <input type="email" name="correo" id="correo" placeholder="Ingrese sus Correo electronico">
                        <label for="telefono">Telefono:</label>
                        <input type="tel" name="telefono" id="telefono" placeholder="Ingrese su numero telefonico">
                        <a class="btn-guardar">Guardar Datos</a>
                    </div>
                </div>
                <div class="detalle-pedido hide form-section">
                    <div class="content">
                        <h4>Detalles del Pedido</h4>
                        <span class="openSection"><img src="{{asset('/img/ordenar-abajo.png')}}" alt=""></span>
                    </div>
                    <div class="contenido hide">
                        <ul class="lista-productos-carrito">
                        @foreach(\Cart::getContent() as $item)
                          <li class="producto-escogido juntar">
                            <div class="escogido-contenedor">
                              <img src="{{asset('/imagenes/'.$item->image) }}">
                              <div class="escogido-info">
                                <p class="texto-negrita">{{$item->name}}</p>
                                <p>Cantidad: {{$item->quantity}}</p>
                                <p>S/. <span class="precio-producto">{{ \Cart::get($item->id)->getPriceSum() }}</span></p>
                              </div>
                            </div>
                          </li>
                          <hr>
                        @endforeach
                        </ul>
                        <a class="btn-guardar">Guardar</a>
                    </div>
                </div>
                <div class="metodo-entrega form-section">
                    <div class="content">
                        <h4>Metodo de Entrega</h4>
                        <span class="openSection"><img src="{{asset('/img/ordenar-abajo.png')}}" alt=""></span>
                    </div>
                    <div class="contenido hide">
                        <div class="juntar">
                            <div class="juntar">
                                <input onchange="mostrarMetodoEntrega(0)" type="radio" name="entrega" value="delivery">
                                <label for="entrega">Envio a Domicilio</label>
                            </div>
                            <div class="juntar">
                                <input onchange="mostrarMetodoEntrega(1)" type="radio" name="entrega" value="recojotienda">
                                <label for="entrega">Recojo en Tienda</label>
                            </div>
                        </div>
                        <div class="domicilio-info hide">
                            <label for="direccion">Direccion</label>
                            <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion">
                            <label for="referencia">Referencia:</label>
                            <input type="text" name="referencia" id="referencia" placeholder="Ingrese referencia a su direccion">
                        </div>
                        <div class="tienda-info hide">
                            <label for="fechaRecojo">Fecha de Recojo</label>
                            <input type="date" name="fechaRecojo" id="fechaRecojo">
                            <label for="horaRecojo">Hora de Recojo</label>
                            <input type="time" name="horaRecojo" id="horaRecojo">
                        </div>
                        <a class="btn-guardar">Guardar</a>
                    </div>
                </div>
                <div class="metodo-pago form-section">
                    <div class="content">
                       <h4>Informacion de Facturacion</h4>
                       <span class="openSection"><img src="{{asset('/img/ordenar-abajo.png')}}" alt=""></span>
                    </div>
                    <div class="contenido hide">
                        <div class="juntar">
                            <div class="juntar">
                                <input onchange="mostrarMetodoPago(0)" type="radio" name="metodopago" value="boleta">
                                <label for="boleta">Pago con Boleta</label>
                            </div>
                            <div class="juntar">
                                <input onchange="mostrarMetodoPago(1)" type="radio" name="metodopago" value="factura">
                                <label for="factura">Pago con Factura</label>
                            </div>
                        </div>
                        
                        <div class="boleta-container hide">
                            <label for="documentoidentidad">Tipo de documento de identidad</label>
                            <select name="documentoidentidad" id="documentoidentidad">
                                <option unselected>Seleccione un tipo de documento</option>
                                <option value="dni">DNI</option>
                                <option value="carnet">Carnet de extranjeria</option>
                                <option value="pasaporte">Pasaporte</option>
                            </select>
                            <label for="numerodocumento">Numero de Documento:</label>
                            <input type="number" name="numerodocumento" id="numerodocumento" placeholder="Ingrese el numero de documento">
                        </div>
                        <div class="factura-container hide">
                            <label for="direccion-factura">Direccion de la Facturacion</label>
                            <input type="text" name="direccion-factura" id="direccion-factura" placeholder="Ingrese la Direccion de Facturacion">
                            <label for="ruc">RUC:</label>
                            <input type="number" name="ruc" id="ruc" placeholder="Ingrese su RUC">
                            <label for="razonsocial">Razon Social o Nombre</label>
                            <input type="text" name="razonsocial" id="razonsocial" placeholder="Ingrese razon social o nombre">
                        </div>
                        <a class="btn-guardar">Guardar</a>
                    </div>
                </div>
                <div class="forma-pago form-section">
                    <div class="content">
                        <h4>Forma de pago</h4>
                        <span class="openSection"><img src="{{asset('/img/ordenar-abajo.png')}}" alt=""></span>
                    </div>
                    <div class="contenido hide">
                        <div class="juntar">
                            <div class="juntar">
                                <input onchange="mostrarFormaPago(0)" type="radio" name="formapago" id="efectivo" value="efectivo">
                                <label for="efectivo">Efectivo</label>
                            </div>
                            <div class="juntar">
                                <input onchange="mostrarFormaPago(1)" type="radio" name="formapago" id="tarjeta" value="tarjeta">
                                <label for="tarjeta">Tarjeta</label>
                            </div>
                        </div>
                        <div class="tarjeta-container hide">
                            <p>Tarjetas de credito o debito</p>
                            <img src="/img/Tarjetas.png" alt="tarjetas aceptadas">
                            <div class="columnas-2">
                                <div class="">
                                    <label for="nombretitular">Nombre del titular:</label>
                                    <input type="text" name="nombretitular" id="nombretitular" placeholder="Ingrese nombre del titular">
                                </div>
                                <div class="">
                                    <label for="numerotarjeta">Numero de Tarjeta:</label>
                                    <input type="number" name="numerotarjeta" id="numerotarjeta" placeholder="Ingrese numero de tarjeta">
                                </div>
                            </div>
                            <div class="columnas-2">
                                <div class="">
                                    <label for="">Fecha de expiracion</label>
                                    <div class="juntar">
                                        <select name="mes" id="mes">
                                            <option>Mes</option>
                                            <option value="0">Enero</option>
                                            <option value="1">Febrero</option>
                                            <option value="2">Marzo</option>
                                            <option value="3">Abril</option>
                                            <option value="4">Mayo</option>
                                            <option value="5">Junio</option>
                                            <option value="6">Julio</option>
                                            <option value="7">Agosto</option>
                                            <option value="8">Setiembre</option>
                                            <option value="9">Octubre</option>
                                            <option value="10">Noviembre</option>
                                            <option value="11">Diciembre</option>
                                        </select>
                                        <input type="number" name="anio" id="anio" placeholder="Año">
                                    </div>
                                </div>
                                <div class="">
                                    <label for="codigo">Codigo de seguridad</label>
                                    <input type="number" name="codigo" id="codigo" placeholder="3 Digitos">
                                </div>
                            </div>
                        </div>
                        <a class="btn-guardar">Guardar</a>
                    </div>
                </div>
                <button class="btn-confirmacion">Confirmar pedido</button>
              </form>
        </div>
        <div class="resumen-pedido">
            <h3>Resumen del Pedido</h3>
            <ul class="lista-productos">
            @foreach(\Cart::getContent() as $item)
              <li class="producto-escogido">
                    <div class="escogido-contenedor">
                      <img src="{{asset('/imagenes/'.$item->image) }}">
                      <div class="escogido-info">
                          <p>{{$item->name}}</p>
                          <p>Cantidad: {{$item->quantity}}</p>
                          <p>S/. <span class="precio-producto">${{ \Cart::get($item->id)->getPriceSum() }}</span></p>
                      </div>
                    </div>
                    <div class="detalle-acciones">
                      <form action="{{ route('cart.update') }}" method="POST">
                          {{ csrf_field() }}
                          <div class="form-group row">
                              <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                              <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                      id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">
                              <button class="btn btn-secondary btn-sm" style="margin-right: 25px;">Editar</button>
                          </div>
                      </form>
                      <form action="{{ route('cart.remove') }}" method="POST">
                          {{ csrf_field() }}
                          <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                          <button class="btn btn-dark" style="margin-right: 10px;">Eliminar</button>
                      </form>
                    </div>
                </li>
                <hr>
            @endforeach
            </ul>
            <ul>
                <li>Subtotal: S/. <span class="subtotal">{{ \Cart::getTotal() }}</span></li>
                <li>IGV: <span class="igv">Incluido</span></li>
                <li>Total: S/. <span class="total">{{ \Cart::getTotal() }}</span></li>
            </ul>
        </div>
    </section>
    </main>
@endsection