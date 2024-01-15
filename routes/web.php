<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketControlle;
use App\Http\Controllers\PrintControlle;
use App\Http\Controllers\EmployeeController;
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
Route::get('sendrequest', 'App\Http\Controllers\EditpasordController@getPost');

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('welcome');
    Route::get('/about', 'HomeController@about')->name('about');

    Route::get('/contact',"ContactController@create")->name('contact.create');
    Route::post('/contact',"ContactController@store")->name('contact.store');
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
       
/**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
     
    });
    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */

         Route::get('/edit/{id}', 'EditpasordController@show')->name('edit.show');
         Route::put('/edit', 'EditpasordController@update')->name('edit.update');
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
