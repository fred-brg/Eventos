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
Route::get('/home', 'Site\SiteController@index' )->name('home');
Route::get('/', 'Site\SiteController@index' )->name('home');
/*Route::get('/', function () {
    return view('Site.welcome');
});*/

Auth::routes();

Route::get('/admin', 'Admin\HomeController@index')->name('admin');
Route::get('/admin/novo-evento', 'Admin\HomeController@formEvento')->name('novo-evento');
Route::post('/admin/novo-evento', 'Admin\HomeController@addEvento')->name('novo-evento');
Route::get('/admin/editar-evento/{id}', 'Admin\HomeController@editarEvento')->name('editar-evento');
Route::post('/admin/update-evento', 'Admin\HomeController@updateEvento')->name('update-evento');
Route::get('/admin/registrar-presenca/{id}', 'Admin\HomeController@registrarPresenca')->name('registrar-presenca');
