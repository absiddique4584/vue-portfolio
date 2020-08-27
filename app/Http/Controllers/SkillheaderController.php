<?php

namespace App\Http\Controllers;

use App\Models\Skillheader;
use Illuminate\Http\Request;

class SkillheaderController extends Controller
{

    /**
     * get all skill header
     */
    public function all_skill(){
        $skillheader = Skillheader::get();
        return response()->json([
            'skillheader'=>$skillheader
        ],200);
    }




    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_skill($id){
        $skillheader = Skillheader::find($id);
        return response()->json([
            'skillheader'=>$skillheader
        ],200);
    }


    /**
     * @param Request $request
     */
    public function add_skill(Request $request){
        $request->validate([
            'desc'=>'required',
            'status'=>'required',
        ]);


        $skillheader = new Skillheader();
        $skillheader->status = $request->status;
        $skillheader->desc = $request->desc;
        $skillheader->save();
    }



    /**
     * @param $id
     * delete skill header
     */
    public function delete_skill($id){
        $skillheader = Skillheader::find($id);
        $skillheader->delete();
    }




    /**
     * @param Request $request
     * @param         $id
     */
    public function update_skill(Request $request,$id){
        $skillheader =Skillheader::find($id);
        $request->validate([
            'desc'=>'required',
            'status'=>'required',
        ]);

        $skillheader->update([
            'desc' => $request->desc,
            'status'=> $request->status,
        ]);
    }

}
