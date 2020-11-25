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

Route::get('/',['as'=>'site.home', 'uses'=>'AgendaController@index']);

Route::get('/contatos',['as'=>'site.agenda.contatos', 'uses'=>'AgendaController@lista']);

Route::get('/contatos/adicionar',['as'=>'site.agenda.adicionar', 'uses'=>'AgendaController@adicionar']);
Route::post('/contatos/salvar',['as'=>'site.agenda.salvar', 'uses'=>'AgendaController@salvar']);
Route::get('/contatos/editar/',['as'=>'site.agenda.editar', 'uses'=>'AgendaController@editar']);
Route::put('/contatos/atualizar',['as'=>'site.agenda.atualizar', 'uses'=>'AgendaController@atualizar']);
Route::get('/contatos/deletar',['as'=>'site.agenda.deletar', 'uses'=>'AgendaController@deletar']);

