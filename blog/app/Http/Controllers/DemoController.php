<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailsModel;
class DemoController extends Controller
{
    function SelectAll(){
        $result= DetailsModel::all();
        return $result;
    }
    
    function SelectById(Request $request){
        $id= $request->input('id');
        $result= DetailsModel::where('id', $id)->get();
        return $result;
    }
    function Count(){
        $result= DetailsModel::count();
        return $result;   
    }
    function Min(){
        $result= DetailsModel::min('roll');
        return $result;   
    }
    function Max(){
        $result= DetailsModel::max('roll');
        return $result;   
    }
    function Avg(){
        $result= DetailsModel::avg('roll');
        return $result;   
    }
    function Sum(){
        $result= DetailsModel::sum('roll');
        return $result;   
    }
    
}
