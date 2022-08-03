<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name("Main");

Route::controller(ProductoController::class)->group(function(){
    Route::get('productos', 'index')->name("AllProducts");
    Route::get('productos/{id}','mostrarProducto')->name("OneProduct");
    Route::get('productos/categoria/{id}','mostrarProductosCategoria')->name("CategoryProducts");
});

Route::get('pedido', PedidoController::class)->name("PlaceOrder");

// Redirigir rutas
// Route::redirect('productos','pedido');

//Metodos de enrutador disponibles
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Restringuir parametro id a solo numeros
// Route::get('/user/{id}', function ($id) {})->where('id', '[0-9]+');
//->whereNumber(), whereAlpha(), whereAlphaNumeric(), whereIn(,[])