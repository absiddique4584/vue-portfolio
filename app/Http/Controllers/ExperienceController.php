<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
class ExperienceController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_experience(){
        $experiences =Experience::get();
        return response()->json([
            'experiences'=>$experiences
        ],200);
    }
}
