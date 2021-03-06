<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::namespace('App\Http\Controllers\Api')->group(function(){
    Route::group(["middleware" =>  "jwt.auth"], function() {
        Route::get('/logout', 'LoginApiController@logout')->name('logout');
        Route::get('/refresh', 'LoginApiController@refresh')->name('refresh');

        Route::prefix('documentos')->group(function(){
            Route::get('', 'DocumentoController@index');
            Route::get('/{id}', 'DocumentoController@show');
        });

        Route::apiResource('analises', 'AnaliseApiController');
        Route::get('RelatorioDeAnalises/{id}', 'AnaliseApiController@relatorio');
    });

    Route::post('/login', 'LoginApiController@login')->name('login');
});