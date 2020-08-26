<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class PortfolioController extends Controller
{



    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_portfolio(){
        $portfolio = Portfolio::with('category')->get();
        return response()->json([
            'portfolio'=>$portfolio
        ]);
    }




    /**
     * @param Request $request
     */
    public function add_portfolio(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'status'=>'required',
            'image'=>'required',
        ]);
        $strpos = strpos($request->image,';');
        $sub = substr($request->image,0,$strpos);
        $ex = explode('/',$sub)[1];
        $name = time().".".$ex;
        $img = Image::make($request->image)->resize(350, 200);
        $upload_path = public_path()."/uploads/portfolio/";
        $img->save($upload_path.$name);


        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->status = $request->status;
        $portfolio->category_id = $request->category_id;
        $portfolio->image = $name;
        $portfolio->save();
    }




    /**
     * @param $id
     */
    public function delete_portfolio($id){
        $portfolio = Portfolio::find($id);
        $image_path = public_path()."/uploads/portfolio/";
        $image = $image_path. $portfolio->image;
        if(file_exists($image)){
            @unlink($image);
        }
        $portfolio->delete();
    }




    /**
     * @param $id
     */
    public function portfolio($id){
        $portfolio =Portfolio::find($id);
        return response()->json([
           'portfolio'=> $portfolio
        ]);
    }



    /**
     * @param Request $request
     * @param         $id
     */
    public function update_portfolio(Request $request,$id){
        $portfolio = Portfolio::find($id);
        $this->validate($request,[
            'title'=>'required',
            'status'=>'required',
            'image'=>'required',
        ]);


        if($request->image!=$portfolio->image){
            $strpos = strpos($request->image,';');
            $sub = substr($request->image,0,$strpos);
            $ex = explode('/',$sub)[1];
            $name = time().".".$ex;
            $img = Image::make($request->image)->resize(350, 200);
            $upload_path = public_path()."/uploads/portfolio/";
            $image = $upload_path. $portfolio->image;
            $img->save($upload_path.$name);

            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $name = $portfolio->image;
        }

        $portfolio->title = $request->title;
        $portfolio->status = $request->status;
        $portfolio->category_id = $request->category_id;
        $portfolio->image = $name;
        $portfolio->save();
    }



}
