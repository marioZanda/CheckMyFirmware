<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use DB;

class BrandModelVersionController extends Controller
{
    public function index(){
        $brands = DB::table("brand")->pluck("name","id");
        return view('check',compact('brands'));
    }
    public function getModelList(Request $request)
        {
            $models = DB::table("model")
            ->where("brand_id",$request->brand_id)
            ->pluck("name","id");
            return response()->json($models);
        }
        public function getVersionList(Request $request)
        {
            $versions = DB::table("version")
            ->where("model_id",$request->model_id)
            ->pluck("name","id");
            return response()->json($versions);
        }
}
