<?php
use App\Mail\NewUserWelcomeMail;

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

Route::get('email', function() {
    return new NewUserWelcomeMail();
});


Route::get('/', 'PostController@index');


Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/p/create', 'PostController@create');
Route::get('/p/{post}', 'PostController@show');
Route::post('/p', 'PostController@store');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.index');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Auth::routes();
