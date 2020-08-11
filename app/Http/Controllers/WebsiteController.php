<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function website(){
        $heroes = Hero::get();
        return view('website.index',compact('heroes'));
    }
}
