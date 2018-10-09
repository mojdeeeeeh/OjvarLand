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

Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/projects', 'projects')->name('projects');
Route::resources ([
    'team'  => 'TeamController',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//master
Route::view('/master/home', 'master.home')->name('master');
Route::view('/master/text', 'master.text')->name('text');
Route::view('/master/posts', 'master.posts')->name('posts');
Route::view('/master/members', 'master.members')->name('members');
