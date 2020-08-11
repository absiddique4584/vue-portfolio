<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('website.index');
//});
Route::get('/', 'WebsiteController@website');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth']],  function (){
    Route::get('/heroes','HeroController@all_heroes');
    Route::post('/add-hero','HeroController@add_heroes');
    Route::get('/heroDelete/{id}','HeroController@destroy');
    Route::get('/editHero/{id}','HeroController@edit_Hero');
    Route::post('/update-hero/{id}','HeroController@update_Hero');
    Route::get('/view-hero/{id}','HeroController@view_Hero');
});
