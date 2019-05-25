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


Route::get('/', function (){
    return view('frontend.welcome');
})->name('accueil');

Route::get('/connexion', function (){
    return view('backend.login');
})->name('connexion');

Route::get('/motdepasse-oublie', function (){
    return view('backend.forget-password');
})->name('motdepasse-oublie');


Route::resource('/produit', 'ProduitsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
