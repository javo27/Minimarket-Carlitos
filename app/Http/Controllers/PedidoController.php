<?php

namespace App\Http\Controllers;
use App\Models\Api;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function __invoke()
    {
        // $api = new Api();
        // $request = $api->actualizarStock(5,"-10");
        return view('sales.pedido');
    }
}
