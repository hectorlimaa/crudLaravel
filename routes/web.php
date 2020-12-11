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

Route::get('/',['as'=>'site.home', 'uses'=>'HomeController@index']);

Route::get('/login',['as'=>'site.login', 'uses'=>'site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair', 'uses'=>'site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar', 'uses'=>'site\LoginController@entrar']);



Route::group(['middleware'=>'auth'], function(){

    Route::get('/contatos',['as'=>'site.agenda.contatos', 'uses'=>'AgendaController@lista']);
    Route::post('/contatos/adicionar',['as'=>'site.agenda.adicionar', 'uses'=>'AgendaController@adicionar']);
    Route::post('/contatos/salvar',['as'=>'site.agenda.salvar', 'uses'=>'AgendaController@salvar']);
    Route::put('/contatos/alterar',['as'=>'site.agenda.alterar', 'uses'=>'AgendaController@alterar']);
    Route::post('/contatos/deletar',['as'=>'site.agenda.deletar', 'uses'=>'AgendaController@deletar']);


});


