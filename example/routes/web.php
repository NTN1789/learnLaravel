<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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


//Route::resource('produtos', ProdutosController::class);

//Route::resource('users', UserController::class);

Route::get('/',[ SiteController::class, 'index'])->name('site.index');
    

Route::get('/produto/{id}', [SiteController::class, 'details'])->name('site.details');     

Route::get('/categora/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

Route::get ('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post ('/carrinho', [CarrinhoController::class, 'adicionarCarrinho'])->name('site.addcarinho');
Route::post ('/remover', [CarrinhoController::class, 'removerCarrinho'])->name('site.removercarinho');
Route::post ('/atualizar', [CarrinhoController::class, 'atualizarCarrinho'])->name('site.atualizarCarrinho');
Route ::get('/limpar', [CarrinhoController::class, 'limparCarrinho'])->name('site.limparCarrinho');

Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth' , [LoginController::class, 'auth'])->name('login.auth');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'checkEmail']);

Route::get('/register', [LoginController::class, 'create'])->name('login.create');

Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/admin/produtos', [ProdutosController :: class,'index'])->name('admin.produtos');

Route::delete('/admin/produtos/delete/{id}', [ProdutosController::class, 'destroy'])->name('admin.produtos.delete');

Route::post('/admin/produtos/store', [ProdutosController::class, 'store'])->name('admin.produtos.store');











/*Route::get('/empresa', function () {
    return view('site/empresa');
});*/