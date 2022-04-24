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
    
}
