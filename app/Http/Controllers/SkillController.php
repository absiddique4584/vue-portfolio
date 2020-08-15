<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Skill2;
use Illuminate\Http\Request;
use Exception;
class SkillController extends Controller
{




    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_skills(){
        $skills = Skill::get();
        return response()->json([
           'skills'=>$skills
        ]);
    }





    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_skills2(){
        $skills2 =Skill2::get();
        return response()->json([
           'skills2'=>$skills2
        ]);
    }



    /**
     * @param $id
     */
    public function delete_skill($id){
        $skill = Skill::find($id);
        $skill->delete();
    }




    /**
     * @param $id
     */
    public function delete_skill2($id){
        $skill2 = Skill2::find($id);
        $skill2->delete();
    }




    /**
     * @param Request $request
     * @return string[]
     */
    public function add_skill(Request $request){
        $skill =new Skill();
        $skill ->name =$request->name;
        $skill ->percent =$request->percent;
        $skill ->value =$request->value;
        $skill ->status =$request->status;
        $skill->save();
        return ['message'=>'ok'];
    }




    /**
     * @param Request $request
     * @return string[]
     */
    public function add_skill2(Request $request){
        $skill =new Skill2();
        $skill ->name =$request->name;
        $skill ->percent =$request->percent;
        $skill ->value =$request->value;
        $skill ->status =$request->status;
        $skill->save();
        return ['message'=>'ok'];
    }




    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_skill($id){
        $skills = Skill::find($id);
        return response()->json([
            'skills'=>$skills
        ]);
    }



    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_skill2($id){
        $skills2 = Skill2::find($id);
        return response()->json([
            'skills2'=>$skills2
        ]);
    }




    /**
     * @param Request $request
     * @param         $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update_skill(Request $request, $id){
        $skills =Skill::find($id);

        $success = null;
        try{
            $success = $skills->update([
                'name' => $request->name,
                'percent'=> $request->percent,
                'value'=> $request->value,
                'status'=> $request->status,
            ]);
        }catch(Exception $exception){
            $success = false;
        }
        return redirect('/all-skills');
    }




    /**
     * @param Request $request
     * @param         $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update_skill2(Request $request, $id){
        $skills =Skill2::find($id);

        $success = null;
        try{
            $success = $skills->update([
                'name' => $request->name,
                'percent'=> $request->percent,
                'value'=> $request->value,
                'status'=> $request->status,
            ]);
        }catch(Exception $exception){
            $success = false;
        }
        return redirect('/all-skills');
    }


}
