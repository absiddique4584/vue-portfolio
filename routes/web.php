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


    Route::get('/all-facts','FactController@all_fact');
    Route::get('/delete-fact/{id}','FactController@delete_fact');
    Route::get('/view-fact/{id}','FactController@view_fact');
    Route::post('/add-fact','FactController@add_fact');
    Route::get('/edit-fact/{id}','FactController@edit_fact');
    Route::post('/update-fact/{id}','FactController@update_fact');
});
