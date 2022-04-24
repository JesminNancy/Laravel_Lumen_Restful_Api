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
    
    function Insert(Request $request){
        $name= $request->input('name');
        $roll= $request->input('roll');
        $city= $request->input('city');
        $phone= $request->input('phone');
        $class= $request->input('class');
        $result= DetailsModel::insert(['name'=>$name, 'roll'=>$roll, 'city'=>$city, 'phone'=>$phone, 'class'=>$class]);
        
        if($result==true){
            return "Data Inserted Successfully";
        }else{
            return "Data Not Inserted";
        }
    }
    
    function Update(Request $request){
        $id= $request->input('id');
        $name= $request->input('name');
        $roll= $request->input('roll');
        
        $result= DetailsModel::where('id', $id)->update(['name'=>$name, 'roll'=>$roll]);
        
        if($result==true){
            return "Data Updated Successfully";
        }else{
            return "Data Not Updated";
        }
    }
        
    function Delete(Request $request){
    
        $id= $request->input('id');   
        $result= DetailsModel::where('id', $id)->delete();
        
        if($result==true){
            return "Data Deleted";
        }else{
            return "Data Not Deleted";
        }
    }
    
}
