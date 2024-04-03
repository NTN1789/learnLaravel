<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProdutosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/produto', [SiteController::class, 'index']);
Route::get('/produto/{id}', [SiteController::class, 'details']);
Route::get('/categoria/{id}', [SiteController::class, 'categoria']);
Route::post('/categoria', [SiteController::class, 'createCategoria']);
Route::delete('/categoria/{id}', [SiteController::class, 'destroy']);
Route::get('/admin/produtos', [ProdutosController :: class,'index']);
Route::post('/admin/produtos', [ProdutosController::class, 'store']);
Route::delete('/admin/produtos/{id}', [ProdutosController::class, 'destroy']);