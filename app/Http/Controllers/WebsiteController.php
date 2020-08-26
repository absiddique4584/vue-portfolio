<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Fact;
use App\Models\Hero;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Skill2;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function website(){
        $heroes = Hero::get();
        $facts = Fact::where('status','active')->get();
        $skills = Skill::where('status','active')->get();
        $skills2 = Skill2::where('status','active')->get();
        $services = Service::where('status','active')->get();
        $testimonials = Testimonial::where('status','active')->get();
        $socials = Hero::select('twitter','facebook','instagram','skype','linkedin')->get();
        $abouts = About::first();
        $hero_resume =Hero::select('name')->first();
        $about_resume = About::select('m_desc','address','phone','email')->first();
        $educations =Education::where('status','active')->get();
        $experiences = Experience::where('status','active')->get();
        $categories = Category::select('id','name','slug')->get();
        $portfolio = Portfolio::with('category')->select('id','category_id','title','image')->where('status','active')->get();
        //return $portfolio;
        return view('website.index',compact('heroes','facts','skills','skills2','services','testimonials',
            'socials','abouts','hero_resume','about_resume','educations','experiences','categories','portfolio'));
    }
}
