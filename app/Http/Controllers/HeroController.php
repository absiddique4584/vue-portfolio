<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use Exception;
class HeroController extends Controller
{
    public function all_heroes(){
        $heroes = Hero::get();
        return response()->json([
            'heroes'=>$heroes
        ],200);
    }

    public function add_heroes(Request $request){
        //dd($request);

        $heroes =new Hero();
        $heroes ->name =$request->name;
        $heroes ->name_a =$request->name_a;
        $heroes ->name_b =$request->name_b;
        $heroes ->name_c =$request->name_c;
        $heroes ->name_d =$request->name_d;
        $heroes ->twitter =$request->twitter;
        $heroes ->facebook =$request->facebook;
        $heroes ->skype =$request->skype;
        $heroes ->linkedin =$request->linkedin;
        $heroes->save();
        return ['message'=>'ok'];

    }




    /**
     * @param $id
     */
    public function destroy($id){
        $hero = Hero::find($id);
        $hero->delete();
    }





    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_Hero($id){
        $heroes = Hero::find($id);
        return response()->json([
           'heroes'=>$heroes
        ],200);
    }




    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update_Hero(Request $request){

        $id = $request->id;
        $hero = Hero::find($id);

        $success = null;
        try{
            $success = $hero->update([
                'name' => $request->name,
            'name_a'=> $request->name_a,
            'name_b'=> $request->name_b,
            'name_c'=> $request->name_c,
            'name_d'=> $request->name_d,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'skype' => $request->skype,
            'linkedin' => $request->linkedin,
            ]);
        }catch(Exception $exception){
            $success = false;
        }
        return redirect('/heroes');

    }



    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function view_Hero($id){
        $hero = Hero::find($id);
        return response()->json([
            'hero'=>$hero
        ],200);
    }

}
