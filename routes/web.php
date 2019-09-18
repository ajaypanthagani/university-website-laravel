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

Route::get('/', 'PagesController@index');

/*academics*/
Route::resource('/programmes', 'ProgrammeController');
Route::resource('/tenders', 'TendersController');
Route::resource('/announcements', 'AnnouncementsController');
/*administration*/
Route::resource('/administration', 'AdministrationController');
/*administration*/

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
