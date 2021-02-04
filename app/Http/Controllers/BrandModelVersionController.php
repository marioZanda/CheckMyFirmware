<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandModelVersionController extends Controller
{
    public function index(){
        $data['brand'] = Brand::get(["name","id"]);
        return view('check',$data);
    }
    public function getModel(){
        $data['model'] = Model::where("brand_id",$request->brand_id)->get(["name","id"]);
        return response()->json($data);
    }
    public function getVersion(){
        $data['version'] = Version::where("model_id",$request->model_id)->get(["name","id"]);
        return response()->json($data);
    }
}
