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


Route::get('/', function(){

	 if(Auth::check()==true)
            return view('home');
	return view('welcome');
});
Auth::routes();
Route::middleware(['checkrole'])->group(function () {


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile_me', 'HomeController@profile_me')->name('profile_me');
Route::post('/editprofile', 'HomeController@editprofile')->name('editprofile');
Route::get('/fav', 'HomeController@fav')->name('fav');
Route::get('/mymessage', 'HomeController@listmessage')->name('mymessage');
Route::get('/seeker', 'HomeController@seeker')->name('seeker');

Route::get('/profile_this/{id}', 'HomeController@profileThis')->name('profile_this');
Route::get('/askseekeracc/{id}', 'HomeController@askseekeracc')->name('askseekeracc');
Route::get('/askseekerinfo/{id}', 'HomeController@askseekerinfo')->name('askseekerinfo');
Route::get('/askseekerver/{id}', 'HomeController@askseekerver')->name('askseekerver');
Route::get('/showlocal', 'HomeController@showlocal')->name('local');
Route::get('/sort', 'HomeController@sort')->name('sort');
Route::get('/seekfund', 'HomeController@seekfund')->name('seekfund');
Route::get('/listplea', 'HomeController@listplea')->name('listplea');
Route::get('/deleteplea/{data}', 'HomeController@deleteplea')->name('deleteplea');

Route::post('/addplea', 'HomeController@addplea')->name('addplea');
Route::get('/mygift', 'HomeController@mygift')->name('mygift');
Route::get('/stat', 'HomeController@stat')->name('showstat');

});