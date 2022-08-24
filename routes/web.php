<?php

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


/*Route::get('/', function(){
    return view('products/index');
});
*/


Route::get('/', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::get('/products/{product}', 'ProductController@show');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::put('/products/{product}', 'ProductController@update');
Route::post('/products', 'ProductController@store');
Route::delete('/products/{product}', 'ProductController@destroy');


Route::get('/categories/{category}', 'CategoryController@index');

