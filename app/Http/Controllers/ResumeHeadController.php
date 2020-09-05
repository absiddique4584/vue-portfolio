<?php

namespace App\Http\Controllers;

use App\Models\Resumehead;
use Illuminate\Http\Request;

class ResumeHeadController extends Controller
{


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_resume_head(){
        $resumeHead =Resumehead::get();
        return response()->json([
            'resumeHead'=>$resumeHead
        ],200);
    }




    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_resume_head($id){
        $resumeHead =Resumehead::find($id);
        return response()->json([
            'resumeHead'=>$resumeHead
        ],200);
    }




    /**
     * @param Request $request
     * @param         $id
     */
    public function update_resume_head(Request $request,$id){
        $resumeHead =Resumehead::find($id);
        $request->validate([
            'desc'=>'required',
            'status'=>'required',
        ]);

        $resumeHead->update([
            'desc' => $request->desc,
            'status'=> $request->status,
        ]);
    }




    /**
     * @param Request $request
     */
    public function add_resume_head(Request $request){
        $request->validate([
            'desc'=>'required',
            'status'=>'required',
        ]);


        $resumehead = new Resumehead();
        $resumehead->status = $request->status;
        $resumehead->desc = $request->desc;
        $resumehead->save();
    }



    /**
     * @param $id
     * resume-head
     */
    public function delete_resume_head($id){
        $resumehead = Resumehead::find($id);
        $resumehead->delete();
    }


}
