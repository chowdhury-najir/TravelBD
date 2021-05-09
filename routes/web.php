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

Route::get('/','BlogController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/top_place','Blogcontroller@places'
);

Route::get('/tour_details', function () {
    return view('tour_details');
});



//blog 

Route::get('/blog/show','BlogController@index');

Route::get('/blog/show/{id}','BlogController@show');


Route::get('blog/create','BlogController@create');

Route::post('blog/store','BlogController@stores')->name('blog.stores');

//

Route::get('/hotel/create','HotelsController@create');

Route::post('/hotel/store','HotelsController@store')->name('hotel.store');

Route::get('/hotel/show','HotelsController@index');

Route::get('/hotel/show/{id}','HotelsController@show');




