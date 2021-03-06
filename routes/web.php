<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('/');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/activity', function (){
    return view('layouts.content.activity');
})->name('activity');

//Route::get('/articles', function (){
//    return view('layouts.content.articles');
//})->name('articles');

Route::get('/contact', function (){
    return view('layouts.content.contact');
})->name('contact');



//Group admin Routes

Route::prefix('admin')->group(function () {


    // Add route for admin login controller
    Route::get('/login', 'Auth\Admin\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\Admin\AdminLoginController@login')->name('admin.login.submit');

    // Add route for admin view
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\Admin\AdminLoginController@logout')->name('admin.logout');
    Route::get('/profile',function (){
        view('layouts.admin.profile');
    })->name('admin.profile');
});

Route::prefix('user')->group(function (){
    Route::get('/profile',function (){
       return view('layouts.user.profile') ;
    })->name('user.profile');
});



Route::resource('articles','ArticleController');
//Route::get('articles','ArticleController@index')->name('articles');


//Route::get('articles', 'ArticleController@index');
//Route::get('articles/{article}', 'ArticleController@show');
//Route::post('articles', 'ArticleController@store');
//Route::put('articles/{article}', 'ArticleController@update');
//Route::delete('articles/{article}', 'ArticleController@delete');
