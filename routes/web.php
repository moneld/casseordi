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

Route::get('/boutique', 'FrontendController@boutique')->name('boutique');

Route::get('/contact', 'FrontendController@contact')->name('contact');

Route::get('/apropos', 'FrontendController@apropos')->name('apropos');

Route::get('/connexion', 'FrontendController@connexion')->name('connexion');

Route::get('/motdepasse-oublie', 'FrontendController@motDePasseOublie')->name('motdepasse-oublie');

Route::get('/detail/{id}/produit/', 'FrontendController@detailProduit')->name('detail-produit');

Route::resource('/panier', 'PaniersController');

Route::group(['prefix' => 'admin','middleware' => 'auth'], function (){

    Route::get('/', function (){
        return view('backend.dashboard');
    })->name('dashboard');

    Route::resource('/produit', 'ProduitsController');
    Route::resource('/categorie', 'CategoriesController');
    Route::get('/produit/{id}/supprimer','ProduitsController@supprimer')->name('produit.supprimer');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
