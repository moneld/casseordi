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


Route::get('/', 'FrontendController@accueil')->name('accueil');

Route::get('/connexion', 'FrontendController@connexion')->name('connexion');

Route::get('/motdepasse-oublie', 'FrontendController@motDePasseOublie')->name('motdepasse-oublie');

Route::get('/detail/{id}/produit/', 'FrontendController@detailProduit')->name('detail-produit');


Route::group(['prefix' => 'admin','middleware' => 'auth'], function (){

    Route::get('/', function (){
        return view('backend.dashboard');
    })->name('dashboard');

    Route::resource('/produit', 'ProduitsController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
