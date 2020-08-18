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


    Route::get('/all-skills','SkillController@all_skills');
    Route::get('/all-skills2','SkillController@all_skills2');
    Route::get('/delete-skill/{id}','SkillController@delete_skill');
    Route::get('/delete-skill2/{id}','SkillController@delete_skill2');
    Route::post('/add-skill','SkillController@add_skill');
    Route::post('/add-skill2','SkillController@add_skill2');
    Route::get('/editSkill/{id}','SkillController@edit_skill');
    Route::get('/editSkill2/{id}','SkillController@edit_skill2');
    Route::post('/update-skill/{id}','SkillController@update_skill');
    Route::post('/update-skill2/{id}','SkillController@update_skill2');


    Route::get('/all-services','ServiceController@all_service');
    Route::get('/delete-service/{id}','ServiceController@delete_service');
    Route::post('/add-service','ServiceController@add_service');
    Route::get('/edit-service/{id}','ServiceController@edit_service');
    Route::post('/update-service/{id}','ServiceController@update_service');


    Route::get('/all-testimonial','TestimonialController@all_testimonial');
    Route::get('/delete-testimonial/{id}','TestimonialController@delete_testimonial');
    Route::post('/testimonial/add','TestimonialController@add_testimonial');




});
