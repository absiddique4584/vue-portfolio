<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Exception;
class ServiceController extends Controller
{




    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_service(){
        $services = Service::get();
        return response()->json([
            'services'=>$services
        ]);
    }



    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_service($id){
        $services = Service::find($id);
        return response()->json([
            'services'=>$services
        ]);
    }




    /**
     * @param $id
     */
    public function delete_service($id){
        $services = Service::find($id);
        $services->delete();
    }




    /**
     * @param Request $request
     * @return string[]
     */
    public function add_service(Request $request){
        $services =new Service();
        $services ->name =$request->name;
        $services ->icon =$request->icon;
        $services ->desc =$request->desc;
        $services ->status =$request->status;
        $services->save();
        return ['message'=>'ok'];
    }




    /**
     * @param Request $request
     * @param         $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update_service(Request $request,$id){
        $services = Service::find($id);

        $success = null;
        try{
            $success = $services->update([
                'name' => $request->name,
                'icon'=> $request->icon,
                'desc'=> $request->desc,
                'status'=> $request->status,
            ]);
        }catch(Exception $exception){
            $success = false;
        }
        return redirect('/all-services');
    }

}
