<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use Exception;
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




    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show_experience($id){
        $experience =Experience::find($id);
        return response()->json([
            'experience'=>$experience
        ],200);
    }




    /**
     * @param Request $request
     * @return string[]
     */
    public function add_experience(Request $request){
        $experience =new Experience();
        $experience ->rank =$request->rank;
        $experience ->year =$request->year;
        $experience ->work_place =$request->work_place;
        $experience ->work1 =$request->work1;
        $experience ->work2 =$request->work2;
        $experience ->work3 =$request->work3;
        $experience ->work4 =$request->work4;
        $experience ->status =$request->status;
        $experience->save();
        return ['message'=>'ok'];
    }




    /**
     * @param $id
     */
    public function delete_experience($id){
        $experience = Experience::find($id);
        $experience->delete();
    }





    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_experience($id){
        $experience =Experience::find($id);
        return response()->json([
            'experience'=>$experience
        ]);
    }




    /**
     * @param Request $request
     * @param         $id
     */
    public function update_experience(Request $request,$id){
        $experience =Experience::find($id);

        $success = null;
        try{
            $success = $experience->update([
                'rank' => $request->rank,
                'year'=> $request->year,
                'work_place'=> $request->work_place,
                'work1'=> $request->work1,
                'work2'=> $request->work2,
                'work3'=> $request->work3,
                'work4'=> $request->work4,
                'status'=> $request->status,
            ]);
        }catch(Exception $exception){
            $success = false;
        }
    }

}
