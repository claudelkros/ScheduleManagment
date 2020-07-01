<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('salles', 'SalleController');
Route::resource('facultes', 'FaculteController');
Route::resource('departements', 'DepartementController');
Route::resource('cycles', 'CycleController');
Route::resource('niveaux', 'NiveauController');
Route::resource('parcours', 'ParcoursController');
Route::resource('semestres', 'SemestreController');
Route::resource('ues', 'UEController');
Route::resource('durees', 'DureeController');
Route::resource('enseignants', 'EnseignantController');
Route::resource('calendrier', 'CalendrierController');


