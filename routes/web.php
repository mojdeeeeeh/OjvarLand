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

Route::view('/', 'index');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/projects', 'projects')->name('projects');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// new route
// Route::view ('/main', 'main')
//      ->name ('main');
Route::resources ([
    'team' => 'TeamController'
]);
