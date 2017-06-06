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
// All admin log in routes
Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin');
  Route::get('/newpost', 'PostController@index')->name('newpost');
  Route::post('/blogpost', 'PostController@store');
  Route::resource('post', 'PostController');
});


Route::get('/getposts', function(){
  return App\Post::all();
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function (){
   return view('login');
});
Route::get('/about', function(){
  return view('about');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
