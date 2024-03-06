<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CarrinhoController;

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


Route::resource('produtos', ProdutosController::class);

Route::get('/',[ SiteController::class, 'index'])->name('site.index');
    

Route::get('/produto/{id}', [SiteController::class, 'details'])->name('site.details');     

Route::get('/categora/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

Route::get ('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post ('/carrinho', [CarrinhoController::class, 'adicionarCarrinho'])->name('site.addcarinho');
Route::post ('/remover', [CarrinhoController::class, 'removerCarrinho'])->name('site.removercarinho');
Route::post ('/atualizar', [CarrinhoController::class, 'atualizarCarrinho'])->name('site.atualizarCarrinho');
Route ::get('/limpar', [CarrinhoController::class, 'limparCarrinho'])->name('site.limparCarrinho');









/*Route::get('/empresa', function () {
    return view('site/empresa');
});*/