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
Route::get('/', function () {
    if(Auth::check())
    {
        return view('welcome');
    }
    else
    {
        return redirect('login');
    }
    
});
Auth::routes();

Route::get('/home', 'Controller@index')->name('home');
Route::get('/poslist', 'Controller@getpos')->name('polist');
Route::get('/createpo', 'Controller@createpo')->name('createpo');
Route::post('/addpo', 'Controller@addpo')->name('addpo');
Route::get('/changepassword', 'Controller@changepasswordform')->name('changepassword');
Route::post('/changepassword', 'Controller@changepassword')->name('changepassword');
