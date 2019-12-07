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

Route::get('/', 'PrincipalController@index');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/index', function () {
    return view('view_base');
});


Route::get('/index_company', 'CompanyController@index');

Route::get('/index_company/solicitacoes_clientes/{$id}', 'CompanyController@show');

Route::get('/index_company/{nav}', 'CompanyController@menu');

Route::get('/index_client', 'ClientController@index');

Route::get('/index_client/{nav}', 'ClientController@menu');

Route::get('/','PrincipalController@index' );

Route::get('/{nav}', 'PrincipalController@menu');

Route::resource('/users','UserController');

Route::resource('/subjects','SubjectController');

Route::get('/delete/subject/{id}','CompanyController@redirecionaExcluir');

Route::get('/delete/requet/{id}','ClientController@redirecionaExcluir');

Route::resource('/requets','RequetController');
