<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
class AboutController extends Controller
{



    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_about(){
        $abouts = About::select('id','image','age','site','email','phone','address','city')->get();
        return response()->json([
           'abouts'=>$abouts
        ]);
    }



    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show_about($id){
        $about = About::find($id);
        return response()->json([
            'about'=>$about
        ],200);
    }




    /**
     * @param Request $request
     */
    public function add_about(Request $request){

        $strpos = strpos($request->image,';');
        $sub = substr($request->image,0,$strpos);
        $ex = explode('/',$sub)[1];
        $photoName = time().".".$ex;
        $img = Image::make($request->image)->resize(400, 400);
        $upload_path = public_path()."/uploads/about/";
        $img->save($upload_path.$photoName);

        $about = new About();
        $about->image = $photoName;
        $about->site = $request->site;
        $about->age = $request->age;
        $about->birth = $request->birth;
        $about->title = $request->title;
        $about->email = $request->email;
        $about->phone = $request->phone;
        $about->address = $request->address;
        $about->degree = $request->degree;
        $about->country = $request->country;
        $about->city = $request->city;
        $about->h_desc = $request->h_desc;
        $about->m_desc = $request->m_desc;
        $about->l_desc = $request->l_desc;
        $about->save();
    }



    /**
     * @param $id
     */
    public function delete_about($id){
        $testimonials = About::find($id);
        $image_path = public_path()."/uploads/about/";
        $image = $image_path. $testimonials->image;
        if(file_exists($image)){
            @unlink($image);
        }
        $testimonials->delete();
    }


    public function edit_about($id){
        $about = About::find($id);
        return response()->json([
            'about'=>$about
        ],200);
    }



    public function update_about(Request $request,$id){
        $about = About::find($id);

        if($request->image!=$about->image){
            $strpos = strpos($request->image,';');
            $sub = substr($request->image,0,$strpos);
            $ex = explode('/',$sub)[1];
            $testName = time().".".$ex;
            $img = Image::make($request->image)->resize(400, 400);
            $upload_path = public_path()."/uploads/about/";
            $image = $upload_path. $about->image;
            $img->save($upload_path.$testName);

            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $testName = $about->image;
        }

        $about->image = $testName;
        $about->site = $request->site;
        $about->age = $request->age;
        $about->birth = $request->birth;
        $about->title = $request->title;
        $about->email = $request->email;
        $about->phone = $request->phone;
        $about->address = $request->address;
        $about->degree = $request->degree;
        $about->country = $request->country;
        $about->city = $request->city;
        $about->h_desc = $request->h_desc;
        $about->m_desc = $request->m_desc;
        $about->l_desc = $request->l_desc;
        $about->save();
    }
}
