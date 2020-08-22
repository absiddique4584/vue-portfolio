<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Exception;
class EducationController extends Controller
{


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_education(){
        $educations =Education::get();
        return response()->json([
            'educations'=>$educations
        ]);
    }




    /**
     * @param $id
     */
    public function delete_education($id){
        $education = Education::find($id);
        $education->delete();

    }



    /**
     * @param $id
     */
    public function show_education($id){
        $education = Education::find($id);
        return response()->json([
           'education'=> $education
        ]);

    }




    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_education($id){
        $education = Education::find($id);
        return response()->json([
           'education'=> $education
        ]);

    }



    public function update_education(Request $request,$id){
        $education =Education::find($id);

        $success = null;
        try{
            $success = $education->update([
                'degree' => $request->degree,
                'year'=> $request->year,
                'versity'=> $request->versity,
                'skill'=> $request->skill,
                'status'=> $request->status,
            ]);
        }catch(Exception $exception){
            $success = false;
        }
    }


}
