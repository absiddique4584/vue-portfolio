<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
//use Exception;
use Intervention\Image\ImageManagerStatic as Image;
class TestimonialController extends Controller
{

    /**
     * show all testimonial
     */
    public function all_testimonial(){
        $testimonials = Testimonial::get();
        return response()->json([
            'testimonials'=>$testimonials
        ]);
    }



    /**
     * testimonial delete
     */
    public function delete_testimonial($id){
        $testimonials = Testimonial::find($id);
        $image_path = public_path()."/uploads/testimonial/";
        $image = $image_path. $testimonials->photo;
        if(file_exists($image)){
            @unlink($image);
        }
        $testimonials->delete();

    }




    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function add_testimonial(Request $request){


        $strpos = strpos($request->photo,';');
        $sub = substr($request->photo,0,$strpos);
        $ex = explode('/',$sub)[1];
        $photoName = time().".".$ex;
        $img = Image::make($request->photo)->resize(120, 120);
        $upload_path = public_path()."/uploads/testimonial/";
        $img->save($upload_path.$photoName);
        $testimonial = new Testimonial();
        $testimonial->title = $request->title;
        $testimonial->name = $request->name;
        $testimonial->desc = $request->desc;
        $testimonial->status = $request->status;
        $testimonial->photo = $photoName;
        $testimonial->save();

    }



    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_testimonial($id){
        $testimonial = Testimonial::find($id);
        return response()->json([
            'testimonial'=>$testimonial
        ]);
    }





    /**
     * @param Request $request
     * @param         $id
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update_testimonial(Request $request,$id){
        $testimonial = Testimonial::find($id);
        $this->validate($request,[
            'title'=>'required',
            'name'=>'required',
            'desc'=>'required',
            'status'=>'required',
            'photo'=>'required',
        ]);


        if($request->photo!=$testimonial->photo){
            $strpos = strpos($request->photo,';');
            $sub = substr($request->photo,0,$strpos);
            $ex = explode('/',$sub)[1];
            $testName = time().".".$ex;
            $img = Image::make($request->photo)->resize(120, 120);
            $upload_path = public_path()."/uploads/testimonial/";
            $image = $upload_path. $testimonial->photo;
            $img->save($upload_path.$testName);

            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $testName = $testimonial->photo;
        }

        $testimonial->title = $request->title;
        $testimonial->name = $request->name;
        $testimonial->desc = $request->desc;
        $testimonial->status = $request->status;
        $testimonial->photo = $testName;
        $testimonial->save();
    }




}
