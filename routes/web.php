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

Route::get('/', function () {
    return view('generics.logview');
})->middleware('auth');


Route::get('datatables', 'DatatableController@index')->name('datatables.index')->middleware('auth');


Route::get('roles', 'Users\RoleController@index')->name('role.index')->middleware('auth');
Route::get('role-create', 'Users\RoleController@createView')->name('role.create')->middleware('auth');
Route::post('role/create', 'Users\RoleController@create')->middleware('auth');
Route::get('role/{id}', 'Users\RoleController@delete')->middleware('auth');

Route::get('user', 'Users\UserController@index')->name('users.index')->middleware('auth');
Route::post('user/create', 'Users\UserController@create')->middleware('auth');
Route::get('user/{id}', 'Users\UserController@delete')->middleware('auth');

Route::get('/ui', function () { return view('layouts.admin'); })->name('ui');
Route::get('login', 'Users\UserController@loginView')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('user-create', 'Users\UserController@createView')->name('user.create')->middleware('auth');

Route::get('users-password-edit', 'Users\UserController@updatepasswd')->name('users.password');
Route::post('users/updatepassw', 'Users\UserController@updatepass');
Route::get('user-delete-{id}','Users\UserController@delete');



Route::get('personal', 'Personal\PersonalController@index')->name('personal.index')->middleware('auth');
Route::get('personal-search', 'Personal\PersonalController@search')->name('personal.search')->middleware('auth');
Route::get('personal-create', 'Personal\PersonalController@createView')->name('personal.create')->middleware('auth');
Route::post('personal/create', 'Personal\PersonalController@create')->middleware('auth');
Route::get('personal/{id}', 'Personal\PersonalController@delete')->middleware('auth');
Route::get('personal-edit-{id}', 'Personal\PersonalController@editView')->name('personal.edit');
Route::post('personal/edit', 'Personal\PersonalController@edit');
Route::get('personal-delete-{id}','Personal\PersonalController@delete');

Route::get('clientes', 'ClientesController@index')->name('clientes.index')->middleware('auth');
Route::get('clientes-create', 'ClientesController@createView')->name('clientes.create')->middleware('auth');
Route::post('clientes/create', 'ClientesController@create')->middleware('auth');
Route::get('clientes/{id}', 'ClientesController@delete')->middleware('auth');
Route::get('clientes-edit-{id}', 'ClientesController@editView')->name('clientes.edit');
Route::post('clientes/edit', 'ClientesController@edit');
Route::get('clientes-delete-{id}','ClientesController@delete');

Route::get('llamados', 'LlamadosController@index')->name('llamados.index')->middleware('auth');
Route::get('llamados-create', 'LlamadosController@createView')->name('llamados.create')->middleware('auth');
Route::post('llamados/create', 'LlamadosController@create')->middleware('auth');
Route::get('llamados/{id}', 'LlamadosController@delete')->middleware('auth');
Route::get('llamados-edit-{id}', 'LlamadosController@editView')->name('llamados.edit');
Route::post('llamados/edit', 'LlamadosController@edit');
Route::get('llamados-delete-{id}','LlamadosController@delete');

Route::get('servicios', 'ServiciosController@index')->name('servicios.index')->middleware('auth');
Route::get('servicios-create', 'ServiciosController@createView')->name('servicios.create')->middleware('auth');
Route::post('servicios/create', 'ServiciosController@create')->middleware('auth');
Route::get('servicios/{id}', 'ServiciosController@delete')->middleware('auth');
Route::get('servicios-edit-{id}', 'ServiciosController@editView')->name('servicios.edit');
Route::post('servicios/edit', 'ServiciosController@edit');
Route::get('servicios-delete-{id}','ServiciosController@delete');











