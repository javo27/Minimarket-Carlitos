<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function volverVistaProductos(Request $req){
        // $api = new Api();
        // $producto = $api->obtenerProducto($id);
        // return view('products.show',compact('producto'));
        return view('home');
    }
}
