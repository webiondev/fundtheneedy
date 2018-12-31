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
//Route::get('/welcome_v1', 'WelcomeController@welcome_v1')->name('welcome_v1');

Route::get('language/{lang}', function ($lang) {
     /**
       * whenever you change locale
       * by passing language ISO code (like en, pl, pt-BR etc.)
       * add/update passed language to a session value with key 'locale'
       */
       Session::put('locale', $lang);

      /**
       * and now return back to a page
       * on which you changed language
       */
       return back();
})->name('language');
Route::get('/english', 'WelcomeController@english')->name('english');
Route::get('/exabout', 'WelcomeController@exabout')->name('exabout');
Route::get('/exvision', 'WelcomeController@exvision')->name('exvision');
Route::get('/excontact', 'WelcomeController@excontact')->name('excontact');
Route::get('/exreport', 'WelcomeController@exreport')->name('exreport');
Route::post('/sendexreport', 'WelcomeController@sendexreport')->name('sendexreport');
Route::get('/exterm', 'WelcomeController@exterm')->name('exterm');
Route::get('/exhowto', 'WelcomeController@exhowto')->name('exhowto');
//Route::get('/email', 'WelcomeController@email');

 Route::get('/', function(){
// //
// // 	 // if(Auth::check()==true and auth()->user()->type=='seeker')
// //    //          return view('seekfund');
// //      // elseif (Auth::check()==true and auth()->user()->type=='giver') {
// //      // 	return view('welcome');
// //      // }
// //
// //      // if (Auth::check()==true and auth()->user()->type=='admin') {
// //      // 	return view('welcome_Admin');
// //      // }
	return view('welcome');
});
Auth::routes();
Route::middleware(['auth','web'])->group(/**
 *
 */
    function () {
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/vision', 'HomeController@vision')->name('vision');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/report', 'HomeController@report')->name('report');
Route::post('/sendreport', 'HomeController@sendreport')->name('sendreport');
Route::get('/term', 'HomeController@term')->name('term');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile_me', 'HomeController@profile_me')->name('profile_me');
Route::get('/searchneed', 'HomeController@searchneed')->name('searchneed');
Route::get('/searchmessage', 'HomeController@searchmessage')->name('searchmessage');
Route::post('/editprofile', 'HomeController@editprofile')->name('editprofile');
Route::post('/editprofilepic', 'HomeController@editprofilepic')->name('editprofilepic');
Route::get('/report', 'HomeController@report')->name('report');
Route::get('/reply/{id1}/{id2}/{id4}/{id3}', 'HomeController@reply')->name('reply');
Route::post('/replythis', 'HomeController@replythis')->name('replythis');
Route::get('/stat', 'HomeController@stat')->name('showstat');
Route::get('/mymessage', 'HomeController@listmessage')->name('mymessage');
Route::get('/mysent', 'HomeController@listsent')->name('mysent');
Route::post('/deleteProfile/{id}', 'HomeController@deleteProfile')->name('deleteprofile');

Route::get('/log_out', 'HomeController@log_out')->name('log_out');
});

//admin
Route::middleware(['admin'])->group(/**
 *
 */
    function () {
Route::get('/welcome_Admin', 'AdminController@welcome_Admin')->name('welcome_Admin');

Route::get('/admin_email_all', 'AdminController@admin_email_all')->name('admin_email_all');
Route::get('/alldonations', 'AdminController@alldonations')->name('alldonations');
Route::get('/allmessages', 'AdminController@allmessages')->name('allmessages');
Route::get('/allusers', 'AdminController@allusers')->name('allusers');
Route::get('/allseekers', 'AdminController@allseekers')->name('allseekers');
Route::get('/admin_profile_this/{id}', 'AdminController@adminprofileThis')->name('adminprofileThis');

});



Route::middleware(['giver'])->group(/**
 *
 */
//only giver
    function () {
  Route::get('/seeker', 'HomeController@seeker')->name('seeker');

Route::get('/deletemessage/{id}', 'HomeController@deletemessage')->name('deletemessage');

Route::get('/profile_this/{id}', 'HomeController@profileThis')->name('profile_this');

Route::get('/listfav', 'HomeController@listfav')->name('listfav');
Route::get('/remfav/{id}', 'HomeController@remfav')->name('remfav');
Route::get('/confirmthisdonation/{id}', 'HomeController@confirmdonation')->name('confirmthisdonation');
 Route::post('/confirmingdonation', 'HomeController@confirmingdonation')->name('confirmingdonation');
Route::get('/askseekeracc/{id1}/{id2}', 'HomeController@askseekeracc')->name('askseekeracc');
Route::get('/askseekerinfo/{id1}/{id2}', 'HomeController@askseekerinfo')->name('askseekerinfo');
Route::get('/askseekerver/{id1}/{id2}', 'HomeController@askseekerver')->name('askseekerver');
Route::get('/pay_card/{id}', 'HomeController@pay_card')->name('pay_card');
Route::get('/adfav/{id1}/{id2}', 'HomeController@addFav')->name('addfav');
Route::get('/corroborate/{id1}/{id2}', 'HomeController@corroborate')->name('corroborate');
Route::get('/corroborate_count/{id}', 'HomeController@corroborate_count')->name('corroborate_count');
Route::get('/showlocal', 'HomeController@showlocal')->name('local');
Route::get('/showcategory', 'HomeController@showcategory')->name('category');
Route::get('/showfavlocal', 'HomeController@showfavlocal')->name('favlocal');
Route::get('/mydonations', 'HomeController@listgiverdonation')->name('giverdonation');
});
//Route::get('/sort', 'HomeController@sort')->name('sort');

//only seeker
Route::middleware(['seeker'])->group(/**
 *
 */
    function () {
Route::get('/seekfund', 'HomeController@seekfund')->name('seekfund');
Route::get('/listplea', 'HomeController@listplea')->name('listplea');
Route::get('/seekercorroboratecount/{id}', 'HomeController@givecorroboratecount')->name('seekercorroboratecount');
Route::get('/deleteplea/{data}', 'HomeController@deleteplea')->name('deleteplea');
Route::post('/addplea', 'HomeController@addplea')->name('addplea');
Route::get('/donorall', 'HomeController@listdonor')->name('donorall');
Route::get('/thisdonationdetails/{id}', 'HomeController@thisdonationdetails')->name('thisdonationdetails');
Route::get('/otherseekers', 'HomeController@otherseekers')->name('otherseekers');
Route::get('/seeker_profile_this/{id}', 'HomeController@seeker_profile_this')->name('seeker_profile_this');
Route::get('/showlocalseeker', 'HomeController@showlocalseeker')->name('localseeker');
Route::get('/showcategoryseeker', 'HomeController@showcategoryseeker')->name('categoryseeker');
Route::get('/corroborate_count_seeker/{id}', 'HomeController@corroborate_count_seeker')->name('corroborate_count_seeker');
});
