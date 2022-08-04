<?php

namespace App\Http\Controllers;
use App\Models\Api;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ProductoController extends Controller
{
    public function index(){
        // $client = new Client([
        //     'base_uri' => env("API_ENDPOINT"),
        //     'timeout' => 2.0,
        // ]);
        // $response = $client->request('GET', "Productos");
        // $data = json_decode($response->getBody());
        // return view('products.index',compact('data'));
        $api = new Api();
        $productos = $api->obtenerProductos();
        // $productos=null;
        return view('products.index',compact('productos'));
    }
    public function mostrarProducto($id){
        $api = new Api();
        $producto = $api->obtenerProducto($id);
        // $producto=null;
        return view('products.show',compact('producto'));
    }
    public function mostrarProductosCategoria($id){
        $api = new Api();
        $productos = $api->obtenerProductosCategoria($id);
        // $producto=null;
        return view('products.index',compact('productos'));
    }
}
