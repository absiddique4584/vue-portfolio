<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Hero;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function website(){
        $heroes = Hero::get();
        $facts = Fact::where('status','active')->get();
        return view('website.index',compact('heroes','facts'));
    }
}
