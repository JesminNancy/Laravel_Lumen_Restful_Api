<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use illuminate\support\Facades\DB;


class MyController extends Controller{

    function My($name){
    
      return response($name)
        ->header('name', $name)
        ->header('age', 30)
        ->header('city', 'Dhaka')
        ->header('username', 'nancy');
    }
    
    function Response(){
        
      $MyArray = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        return response()->json($MyArray); 
        
    }
    
    function First(){
      return Redirect('/second');
    }
    
    function Second(){
      return "I am Second";
    }
    
    function Download(){ 
      $path= 'demo.txt';
      return response()->download($path);
    }
    
    function Catch(Request $request){
        return $request->header("name");
    }
    
    function testConn(){
      $dbname = DB::Connection()->select("SELECT * FROM details");
      return $dbname;
    }
}