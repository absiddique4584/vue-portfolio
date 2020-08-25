<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_category(){
        $categories = Category::get();
        return response()->json([
            'categories'=>$categories
        ],200);
    }



    /**
     * @param Request $request
     */
    public function add_category(Request $request){
        Category::create([
           'name'=>$request->name ,
           'slug'=>$this->slugify($request->name),
           'status'=>$request->status,
        ]);
    }



    /**
     * @param $id
     * category delete
     */
    public function delete_category($id){
       $categories = Category::find($id);
       $categories->delete();
    }




    /**
     * @param $id
     */
    public function edit_category($id){
       $category = Category::find($id);
       return response()->json([
           'category'=>$category
       ]);
    }


    /**
     * @param Request $request
     * @param         $id
     * update category
     */
    public function update_category(Request $request,$id){
      $categories =Category::find($id);
        $categories->update([
            'name' => $request->name,
            'slug'=>$this->slugify($request->name),
            'status'=> $request->status,
        ]);

    }



    /**
     * slug generator function
     */
    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

}
