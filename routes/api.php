<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::namespace('API')->name('api.')->group(function(){
  
    Route::prefix('carros')->group(function(){
        
        Route::get('/', 'CarroController@index')->name('index_carros');
        Route::get('/{id}', 'CarroController@show')->name('show_carros');
        
        Route::post('/', 'CarroController@store')->name('add_carros');
        
        Route::put('/{id}', 'CarroController@update')->name('update_carros');
        
        Route::delete('/{id}', 'CarroController@delete')->name('delete_carros');
        
    });
    
//});