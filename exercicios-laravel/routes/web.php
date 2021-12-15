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
Route::get('/perfil', [UsuarioController::class, 'perfil'])->name('perfil');

Route::get('/documentos', [DocumentoController::class, 'documentos'])->name('documentos');
Route::get('/documento/{id}', [DocumentoController::class, 'exibe'])->name('exibedoc');
Route::get('/documentos/novo', [DocumentoController::class, 'novo'])->name('criadoc');
Route::post('/documentos', [DocumentoController::class, 'insere'])->name('inseredoc');
Route::delete('/documentos/remover/{id}', [DocumentoController::class, 'remove'])->name('removedoc');

Route::get('/assinaturas', [AssinaturaController::class, 'index'])->name('assinatura.index');
Route::get('/assinatura/novo', [AssinaturaController::class, 'novo'])->name('assinatura.novo');
Route::get('/assinatura/{id}', [AssinaturaController::class, 'show'])->name('assinatura.show');
Route::post('/assinaturas', [AssinaturaController::class, 'store'])->name('assinaturas.store');
Route::delete('/assinaturas/remover/{id}', [AssinaturaController::class, 'remove'])->name('assinaturas.destroy');
