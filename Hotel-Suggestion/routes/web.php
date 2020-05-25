<?php

use Illuminate\Support\Facades\Route;
use App\Entities\Account;
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
Route::get('{detail}/single_listing','HomeController@single_listing');
    Route::get('booking','HomeController@booking');
    Route::get('single_listing','HomeController@single_listing');
    Route::get('booking','BookController@index');
    Route::post('booking','BookController@store');
});
// admin
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {

    Route::get('conv',function () {
        $accounts = Account::all();
        foreach($accounts as $account)
        {
            $a = Account::find($account->id);
            $a->password=bcrypt($account->password);
            $a->save();
        }
    });

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
    Route::group(['prefix' => 'hotels'], function () {
        Route::get('', 'HotelController@index');
        Route::get('create', 'HotelController@create');
        Route::post('', 'HotelController@store');
        Route::get('{Hotel}/edit', 'HotelController@edit');
        Route::put('{Hotel}', 'HotelController@update');
        Route::delete('{Hotel}', 'HotelController@destroy');
    });
    Route::get('','DashboardController');


    Route::group(['prefix' => 'users'], function () {
        Route::get('', 'UserController@index');
        Route::get('create', 'UserController@create');
        Route::post('', 'UserController@store');
        Route::get('{account}/edit', 'UserController@edit');
        Route::put('{account}', 'UserController@update');
        Route::delete('{account}', 'UserController@destroy');
        Route::get('{account}', 'UserController@show');
    });
});
