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

use App\Productos2;

Route::get('/', function () {
    return view('app');
});


Route::get('/miruta',function(){

echo('hola esta es la ruta que creastes..');
});

Route::get('/saludo/{nombre}/{apellido?}',function($nombre, $apellido='(no hay apellido)'){
    echo'hola '.$nombre.' '.$apellido;
});

//----------------------vista de las vista normales-----------------------//
Route::get('/marcas',
'MarcasController@index');

Route::get('/categorias',
'CategoriasController@index');

Route::get('/productos',
'ProductosController@index');


//----------------------vista de formularios----------------------------//
Route::get('/formulariomarcas',
'MarcasController@index2');

Route::get('/formulariocategorias',
'CategoriasController@index2');

Route::get('/formularioproductos',
'ProductosController@index2');

//--------------------------Marcas---------------------------------//

Route::get('marcas', 'MarcasController@index')
->name('marcas.index');


Route::get('marcas/create', 'MarcasController@create')
->name('marcas.create');

Route::post('marcas/store', 'MarcasController@store')
->name('marcas.store');


Route::get('marcas/{id}', 'MarcasController@show')
->name('marcas.show');


Route::get('marcas/{id}/edit', 'MarcasController@edit')
->name('marcas.edit');


Route::put('marcas/{id}', 'MarcasController@update')
->name('marcas.update');

Route::delete('marcas/{id}','MarcasController@delete')
->name('marcas.delete');







//----------------------------Productos-------------------------------------//


Route::get('motos', 'MotosController@index')
->name('motos.index');


Route::get('motos/create', 'MotosController@create')
->name('motos.create');

Route::post('motos/store', 'MotosController@store')
->name('motos.store');


Route::get('motos/{id}', 'MotosController@show')
->name('motos.show');


Route::get('motos/{id}/edit', 'MotosController@edit')
->name('motos.edit');


Route::put('motos/{id}', 'MotosController@update')
->name('motos.update');

Route::delete('motos/{id}','MotosController@delete')
->name('motos.delete');
//--------------------------Categorias---------------------------------//

Route::get('categorias', 'CategoriasController@index')
->name('categorias.index');


Route::get('categorias/create', 'CategoriasController@create')
->name('categorias.create');

Route::post('categorias/store', 'CategoriasController@store')
->name('categorias.store');


Route::get('categorias/{id}', 'CategoriasController@show')
->name('categorias.show');


Route::get('categorias/{id}/edit', 'CategoriasController@edit')
->name('categorias.edit');


Route::put('categorias/{id}', 'CategoriasController@update')
->name('categorias.update');

Route::delete('categorias/{id}','CategoriasController@delete')
->name('categorias.delete');


