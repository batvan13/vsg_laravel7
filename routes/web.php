<?php

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
Route::get('clear_cache', function () {
    \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    dd("Cache is cleared");
});

/*
Route::get('/', function () {
    return view('Frontend.home');
});
*/
Route::get('/aboutus', 'FrontController@about');
Route::get('/condition', 'FrontController@conditions');
Route::get('/contact', 'FrontController@contact');
Route::post('/contact','FrontController@contactSubmit')->name('contact.submit');
Route::get('/shared', 'FrontController@shared');
Route::get('/', 'FrontController@home');
Route::get('/apartment/{slug}', 'FrontController@apartment');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('admin',function ()
    {
         return view('Admin.dashboard');
    })->name('admin');
    Route::resource('apartments','Admin\ApartmentController');
    Route::resource('posts','Admin\PostController');
    Route::resource('about','Admin\AboutController');
    Route::resource('conditions','Admin\ConditionController');
    Route::resource('profile','Admin\ProfileController');

    //Calendar
    Route::resource('calendars','Admin\CalendarController');

    //

    Route::get('image', 'Admin\ApartmentImageController@index')->name('image');
    Route::post('image', 'Admin\ApartmentImageController@upload');
    Route::delete('image/{id}', 'Admin\ApartmentImageController@destroy');

});
