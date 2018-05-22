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

// home route
Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create');

/* auth routes */
Route::get('/logout', 'PlayerController@logout');
Auth::routes();

/* document_general routes */
Route::get('/document_general/index/{category}', 'DocumentGeneralController@index');
Route::get('/document_general/create/{category}', 'DocumentGeneralController@create');
Route::get('/document_general/{document_general}', 'DocumentGeneralController@show');
Route::get('/document_general/edit/{document_general}', 'DocumentGeneralController@edit');
Route::post('/document_general', 'DocumentGeneralController@store');
Route::post('/document_general/update/{document_general}', 'DocumentGeneralController@update');
Route::delete('/document_general/delete/{document_general}', 'DocumentGeneralController@destroy');

/* player routes */
Route::get('/player/stats', 'PlayerController@index_stats');
Route::get('/player/spheres', 'PlayerController@index_spheres');
Route::get('/player/create', 'PlayerController@create');
Route::get('/player/{user}', 'PlayerController@show');
Route::get('/player/edit/{user}', 'PlayerController@edit');
Route::post('/player', 'PlayerController@store');
Route::post('/player/update/{user}', 'PlayerController@update');
Route::delete('/player/delete/{user}', 'PlayerController@delete');

/* sphere_grid routes */
Route::get('/sphere_grid/combat', 'SphereGridController@index_combat');
Route::get('/sphere_grid/skills', 'SphereGridController@index_skills');
Route::post('/sphere_grid/combat/destroy_all', 'SphereGridController@destroy_all');
Route::post('/sphere_grid/combat/store', 'SphereGridController@store');

/* search route */
Route::get('/search/{keyword}', 'HomeController@search');
