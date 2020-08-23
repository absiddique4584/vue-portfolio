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


    Route::get('/all-about','AboutController@all_about');
    Route::post('/about/add','AboutController@add_about');
    Route::get('/show-about/{id}','AboutController@show_about');
    Route::get('/delete-about/{id}','AboutController@delete_about');
    Route::get('/edit-about/{id}','AboutController@edit_about');
    Route::post('/update-about/{id}','AboutController@update_about');


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
    Route::get('/edit-testimonial/{id}','TestimonialController@edit_testimonial');
    Route::post('/update-testimonial/{id}','TestimonialController@update_testimonial');


    Route::get('/all-education','EducationController@all_education');
    Route::get('/education-delete/{id}','EducationController@delete_education');
    Route::get('/resume/education/show/{id}','EducationController@show_education');
    Route::get('/resume/education/edit/{id}','EducationController@edit_education');
    Route::post('/update-education/{id}','EducationController@update_education');
    Route::post('/add-education','EducationController@Add_education');


    Route::get('/all-experience','ExperienceController@all_experience');
    Route::get('/resume/experience/show/{id}','ExperienceController@show_experience');
    Route::post('/add-experience','ExperienceController@add_experience');
    Route::get('/experience-delete/{id}','ExperienceController@delete_experience');
    Route::get('/resume/experience/edit/{id}','ExperienceController@edit_experience');
    Route::post('/update-experience/{id}','ExperienceController@update_experience');


});
