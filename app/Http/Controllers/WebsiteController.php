<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Hero;
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
        return view('website.index',compact('heroes','facts','skills','skills2','services','testimonials','socials'));
    }
}
