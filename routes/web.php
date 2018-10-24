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

	return view('welcome');
	
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notizie', 'NewsController@allnews')->name('notizie');

Route::get('/notizia/{id}', 'NewsController@shownotizia')->name('notizia');


//Aggiungere news

Route::get('/form', 'NewsController@showform')->name('form');

Route::post('/aggiungi', 'NewsController@aggiungi')->name('aggiungi');




Route::get('/notizie/non-approvate','NewsController@toapprove')->name('toapprove');

Route::put('/notizie/approve/{id}', 'NewsController@approve')->name('approve');

Route::delete('/notizia/delete/{id}', 'NewsController@delete')->name('delete');


Route::get('/thankyou', function(){

	return view('thankyou');

})->name('thankyou');

