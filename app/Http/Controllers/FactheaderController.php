<?php

namespace App\Http\Controllers;

use App\Models\Factheader;
use Illuminate\Http\Request;

class FactheaderController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_factheader(){
        $factheader =Factheader::get();
        return response()->json([
            'factheader'=>$factheader
        ]);
    }



    /**
     * @param Request $request
     */
    public function add_factheader(Request $request){
        $request->validate([
            'desc'=>'required',
            'status'=>'required',
        ]);


        $factHeader = new Factheader();
        $factHeader->status = $request->status;
        $factHeader->desc = $request->desc;
        $factHeader->save();
    }


    /**
     * delete fact header by $id
     */
    public function delete_factheader($id){
        $header =Factheader::find($id);
        $header->delete();

    }




    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_factheader($id){
        $factheader = Factheader::find($id);
        return response()->json([
            'factheader'=>$factheader
        ]);
    }


    /**
     * @param Request $request
     * @param         $id
     */
    public function update_factheader(Request $request,$id){
        $factHeader =Factheader::find($id);
        $request->validate([
            'desc'=>'required',
            'status'=>'required',
        ]);

        $factHeader->update([
            'desc' => $request->desc,
            'status'=> $request->status,
        ]);
    }



}
