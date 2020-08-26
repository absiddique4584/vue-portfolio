<?php

namespace App\Http\Controllers;

use App\Models\Background;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class BackgroundController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_background(){
        $background =Background::get();
        return response()->json([
            'background'=>$background
        ]);
    }



    /**
     * @param Request $request
     */
    public function add_background(Request $request){
        $this->validate($request,[
            'status'=>'required',
            'image'=>'required',
        ]);
        $strpos = strpos($request->image,';');
        $sub = substr($request->image,0,$strpos);
        $ex = explode('/',$sub)[1];
        $name = time().".".$ex;
        $img = Image::make($request->image);
        $upload_path = public_path()."/uploads/background/";
        $img->save($upload_path.$name);


        $background = new Background();
        $background->status = $request->status;
        $background->image = $name;
        $background->save();
    }



    /**
     * background delete
     */
    public function delete_background($id){
        $background = Background::find($id);
        $image_path = public_path()."/uploads/background/";
        $image = $image_path. $background->image;
        if(file_exists($image)){
            @unlink($image);
        }
        $background->delete();
    }



    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_background($id){
        $back = Background::find($id);
        return response()->json([
            'back'=>$back
        ]);
    }



    /**
     * @param Request $request
     * @param         $id
     */
    public function update_background(Request $request,$id){
        $background = Background::find($id);
        $this->validate($request,[
            'status'=>'required',
            'image'=>'required',
        ]);


        if($request->image!=$background->image){
            $strpos = strpos($request->image,';');
            $sub = substr($request->image,0,$strpos);
            $ex = explode('/',$sub)[1];
            $name = time().".".$ex;
            $img = Image::make($request->image);
            $upload_path = public_path()."/uploads/background/";
            $image = $upload_path. $background->image;
            $img->save($upload_path.$name);

            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $name = $background->image;
        }

        $background->status = $request->status;
        $background->image = $name;
        $background->save();
    }

}
