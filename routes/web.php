<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ProdutoController;
use App\Http\Controllers\Admin\PedidoController;
use App\Http\Controllers\Admin\TipoEventoController;
use App\Http\Controllers\Admin\EventoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\EventosController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('site.index');

Route::get('details/{id}', [IndexController::class, 'details'])->name('site.details');

Route::get('/pedidos/{id}', [PedidosController::class, 'create'])->name('site.create');
Route::post('/pedidos/store', [PedidosController::class, 'store'])->name('site.store');
Route::post('/reservas/store', [PedidosController::class, 'store'])->name('site.reservas.store');
Route::post('/eventos/store', [EventosController::class, 'store'])->name('site.eventos.store');




Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
    Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('create');
    Route::post('/categorias/store', [CategoriaController::class, 'store'])->name('categoria.store');
    Route::get('/categorias/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
    Route::put('/categorias/{id}/update', [CategoriaController::class, 'update'])->name('categoria.update');
    Route::get('/categorias/{id}/destroy', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

    Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index');
    Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produto.create');
    Route::post('/produtos/store', [ProdutoController::class, 'store'])->name('produto.store');
    Route::get('/produtos/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
    Route::put('/produtos/{id}/update', [ProdutoController::class, 'update'])->name('produto.update');
    Route::get('/produtos/{id}/destroy', [ProdutoController::class, 'destroy'])->name('produto.destroy');


    Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedido.index');
    Route::get('/pedidos/{id}/edit', [PedidoController::class, 'edit'])->name('pedido.edit');
    Route::put('/pedidos/{id}/update', [PedidoController::class, 'update'])->name('pedido.update');
    Route::get('/pedido/{id}/destroy', [PedidoController::class, 'destroy'])->name('pedido.destroy');



    Route::get('/tipo', [TipoEventoController::class, 'index'])->name('tipo.index');    
    Route::get('/tipo/create', [TipoEventoController::class, 'create'])->name('tipo.create');
    Route::post('/tipo/store', [TipoEventoController::class, 'store'])->name('tipo.store');
    Route::get('/tipo/{id}/edit', [TipoEventoController::class, 'edit'])->name('tipo.edit');
    Route::put('/tipo/{id}/update', [TipoEventoController::class, 'update'])->name('tipo.update');
    Route::get('/tipo/{id}/destroy', [TipoEventoController::class, 'destroy'])->name('tipo.destroy');



    Route::get('/eventos', [EventoController::class, 'index'])->name('evento.index');    
    Route::get('/eventos/create', [EventoController::class, 'create'])->name('evento.create');
    Route::post('/eventos/store', [EventoController::class, 'store'])->name('evento.store');
    Route::get('/eventos/{id}/edit', [EventoController::class, 'edit'])->name('evento.edit');
    Route::put('/eventos/{id}/update', [EventoController::class, 'update'])->name('evento.update');
    Route::get('/eventos/{id}/destroy', [EventoController::class, 'destroy'])->name('evento.destroy');



    Route::get('/users', [UserController::class, 'index'])->name('user.index');    


});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
