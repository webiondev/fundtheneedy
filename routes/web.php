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

Route::get('/exabout', 'WelcomeController@exabout')->name('exabout');
Route::get('/exvision', 'WelcomeController@exvision')->name('exvision');
Route::get('/excontact', 'WelcomeController@excontact')->name('excontact');
Route::get('/exterm', 'WelcomeController@exterm')->name('exterm');


Route::get('/', function(){

	 if(Auth::check()==true and auth()->user()->type=='seeker')
            return view('seekfund');
     elseif (Auth::check()==true and auth()->user()->type=='giver') {
     	return view('terms');
     }
	return view('welcome');
});
Auth::routes();
Route::middleware(['checkrole'])->group(/**
 *
 */
    function () {

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/vision', 'HomeController@vision')->name('vision');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/term', 'HomeController@term')->name('term');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile_me', 'HomeController@profile_me')->name('profile_me');
Route::get('/searchneed', 'HomeController@searchneed')->name('searchneed');
Route::get('/searchmessage', 'HomeController@searchmessage')->name('searchmessage');
Route::post('/editprofile', 'HomeController@editprofile')->name('editprofile');
Route::post('/editprofilepic', 'HomeController@editprofilepic')->name('editprofilepic');

Route::post('/deleteProfile/{id}', 'HomeController@deleteProfile')->name('deleteprofile');

Route::get('/listfav', 'HomeController@listfav')->name('listfav');
Route::get('/remfav/{id}', 'HomeController@remfav')->name('remfav');

Route::get('/mymessage', 'HomeController@listmessage')->name('mymessage');
Route::get('/mysent', 'HomeController@listsent')->name('mysent');
Route::get('/confirmthisdonation/{id}', 'HomeController@confirmdonation')->name('confirmthisdonation');
 Route::post('/confirmingdonation', 'HomeController@confirmingdonation')->name('confirmingdonation');
Route::get('/deletemessage/{id}', 'HomeController@deletemessage')->name('deletemessage');
Route::get('/reply/{id1}/{id2}/{id3}', 'HomeController@reply')->name('reply');
Route::post('/replythis', 'HomeController@replythis')->name('replythis');
Route::get('/seeker', 'HomeController@seeker')->name('seeker');

Route::get('/profile_this/{id}', 'HomeController@profileThis')->name('profile_this');
Route::get('/askseekeracc/{id1}/{id2}', 'HomeController@askseekeracc')->name('askseekeracc');
Route::get('/askseekerinfo/{id1}/{id2}', 'HomeController@askseekerinfo')->name('askseekerinfo');
Route::get('/askseekerver/{id1}/{id2}', 'HomeController@askseekerver')->name('askseekerver');
Route::get('/adfav/{id1}/{id2}', 'HomeController@addFav')->name('addfav');
Route::get('/corroborate/{id1}/{id2}', 'HomeController@corroborate')->name('corroborate');
Route::get('/corroborate_count/{id}', 'HomeController@corroborate_count')->name('corroborate_count');


Route::get('/showlocal', 'HomeController@showlocal')->name('local');
Route::get('/sort', 'HomeController@sort')->name('sort');
Route::get('/seekfund', 'HomeController@seekfund')->name('seekfund');
Route::get('/listplea', 'HomeController@listplea')->name('listplea');
Route::get('/seekercorroboratecount/{id}', 'HomeController@givecorroboratecount')->name('seekercorroboratecount');
Route::get('/deleteplea/{data}', 'HomeController@deleteplea')->name('deleteplea');

Route::post('/addplea', 'HomeController@addplea')->name('addplea');
Route::get('/donorall', 'HomeController@listdonor')->name('donorall');
Route::get('/thisdonationdetails', 'HomeController@thisdonationdetails')->name('thisdonationdetails');
Route::get('/mydonations', 'HomeController@listgiverdonation')->name('giverdonation');
Route::get('/stat', 'HomeController@stat')->name('showstat');
Route::get('/log_out', 'HomeController@log_out')->name('log_out');
//Route::get('/log_out', 'HomeController@log_out')->name('log_out');

});