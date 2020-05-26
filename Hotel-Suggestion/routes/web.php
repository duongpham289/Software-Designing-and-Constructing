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

Route::get('/', function () {
    return view('welcome');
});
// client
Route::group(['namespace' => 'Client'], function () {
    Route::get('', 'HomeController@index');
    Route::get('about', 'HomeController@about');
    Route::get('contact', 'HomeController@contact');
    Route::get('blog','HomeController@blog');
    Route::get('offers','HomeController@offers');
    Route::get('single_listing','HomeController@single_listing');
    Route::get('{room}/booking','BookController@index');
    Route::post('{room}/booking','BookController@store');
});
// admin
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {



    Route::resource('rooms', 'RoomController');
    Route::post('rooms/sort', 'RoomController@show')->name('show');
    // Route::get('', 'DashboardController');
    Route::get('login', 'LoginController@showLoginForm');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout');
    Route::group(['prefix' => 'orders'], function () {
        Route::get('', 'OrderController@index');
        Route::get('processed', 'OrderController@processed');
        Route::get('{order}/edit', 'OrderController@edit');
        Route::put('{order}', 'OrderController@update');
    });
    Route::group(['prefix' => 'products'], function () {
        Route::get('', 'ProductController@index');
        Route::get('create', 'ProductController@create');
        Route::post('', 'ProductController@store');
        Route::get('{product}/edit', 'ProductController@edit');
        Route::put('{product}', 'ProductController@update');
        Route::delete('{product}', 'ProductController@destroy');
        Route::get('{product}', 'ProductController@show');
    });
    Route::resource('users', 'UserController');
});
Route::get('conv',function () {
    $accounts = Account::all();
    foreach($accounts as $account)
    {
        $a = Account::find($account->id);
        $a->password=bcrypt('123456');
        $a->save();
    }
});

Route::get('conv',function () {
    $accounts = Account::all();
    foreach($accounts as $account)
    {
        $a = Account::find($account->id);
        $a->password=bcrypt('123456');
        $a->save();
    }
});
