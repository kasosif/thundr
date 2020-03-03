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

Route::get('/', 'PagesController@homepage')->name('homepage');
Route::get('/nous', 'PagesController@aboutpage')->name('aboutpage');
Route::get('/services', 'PagesController@servicespage')->name('servicespage');
Route::get('/dolibarr', 'PagesController@dolibarrpage')->name('dolibarrpage');
//Route::get('/portfolio', 'PagesController@portfoliopage')->name('portfoliopage');
//Route::get('/realistaion/{slug}', 'PagesController@realisationpage')->name('realisationpage');
//Route::get('/travaux-internes', 'PagesController@internalworkspage')->name('internalworkspage');
Route::get('/contact', 'PagesController@contactpage')->name('contactpage');
Route::post('/sendmail', 'PagesController@sendmail')->name('sendmail');
