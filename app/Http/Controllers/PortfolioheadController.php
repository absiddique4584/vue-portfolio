<?php

namespace App\Http\Controllers;

use App\Models\Portfoliohead;
use Illuminate\Http\Request;

class PortfolioheadController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function all_portfolio_head(){
        $portfoliohead =Portfoliohead::get();
        return response()->json([
            'portfoliohead' => $portfoliohead
        ],200);
    }



    /**
     * @param Request $request
     */
    public function add_portfolio_head(Request $request){
        $request->validate([
            'desc'=>'required',
            'status'=>'required',
        ]);


        $portfoliohead = new Portfoliohead();
        $portfoliohead->status = $request->status;
        $portfoliohead->desc = $request->desc;
        $portfoliohead->save();
    }


    /**
     * delete portfolio head section
     */
    public function delete_portfolio_head($id){
        $portfoliohead = Portfoliohead::find($id);
        $portfoliohead->delete();
    }




    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit_portfolio_head($id){
        $portfoliohead =Portfoliohead::find($id);
        return response()->json([
            'portfoliohead' => $portfoliohead
        ],200);
    }




    /**
     * @param Request $request
     * @param         $id
     */
    public function update_portfolio_head(Request $request,$id){
        $portfoliohead =Portfoliohead::find($id);
        $request->validate([
            'desc'=>'required',
            'status'=>'required',
        ]);

        $portfoliohead->update([
            'desc' => $request->desc,
            'status'=> $request->status,
        ]);
    }

}
