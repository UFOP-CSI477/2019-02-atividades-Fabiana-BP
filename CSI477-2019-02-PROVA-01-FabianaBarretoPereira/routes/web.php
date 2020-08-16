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

Route::get('/',  function () {
    return view('index');
});


Auth::routes();

Route::get('/home', function () {
    return view('index');})->name('home');

//rotas administrativo

Route::resource('/administrativo/projeto','ProjetoController');

Route::resource('/administrativo/alunos','AlunoController');

Route::resource('/administrativo/professores','ProfessorController');

//rotas estudante
Route::get('/areaestudante','PrincipalController@index_estudante');

Route::get('/projetos','PrincipalController@index');

Route::get('/buscaprofessores','PrincipalController@create');

Route::post('/professores','PrincipalController@procura');
