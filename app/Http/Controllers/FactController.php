<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;
use Exception;
class FactController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_fact(){
        $facts = Fact::get();
        return response()->json([
           'facts'=>$facts
        ]);
    }




    /**
     * @param $id
     */
    public function delete_fact($id){
        $fact = Fact::find($id);
        $fact->delete();
    }




    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function view_fact($id){
        $facts = Fact::find($id);
        return response()->json([
            'facts'=>$facts
        ],200);
    }




    /**
     * @param Request $request
     * @return string[]
     */
    public function add_fact(Request $request){
        $facts =new Fact();
        $facts ->icon =$request->icon;
        $facts ->number =$request->number;
        $facts ->name =$request->name;
        $facts ->status =$request->status;
        $facts->save();
        return ['message'=>'ok'];
    }




    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_fact($id){
        $editfacts = Fact::find($id);
        return response()->json([
            'editfacts'=>$editfacts
        ],200);
    }




    /**
     * @param Request $request
     * @param         $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update_fact(Request $request,$id){
        $facts = Fact::find($id);
        $success = null;
        try{
            $success = $facts->update([
                'icon' =>$request->icon,
           'number' =>$request->number,
            'name' =>$request->name,
            'status' =>$request->status,
            ]);
        }catch(Exception $exception){
            $success = false;
        }
        return redirect('/all-facts');
    }


}
