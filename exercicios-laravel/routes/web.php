<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    UsuarioController,
    DocumentoController, 
    AssinaturaController
};

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perfil', [UsuarioController::class, 'perfil']);

Route::get('/documentos', [DocumentoController::class, 'documentos'])->name('documentos');
Route::get('/documento/{id}', [DocumentoController::class, 'exibe'])->name('exibedoc');

Route::get('/assinaturas', [AssinaturaController::class, 'index'])->name('assinatura.index');
Route::get('/assinatura/{id}', [AssinaturaController::class, 'show'])->name('assinatura.show');
