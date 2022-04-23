<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use illuminate\support\Facades\DB;

class BuilderController extends Controller{

      function AllRows(){
        $result= DB::table('details')->get();
        return $result;
      }
      
      function SingleRows(){ //Retrieving Query Builder...
      
        // $result= DB::table('details')->where('name', 'Radifa')->first();  
        // return $result->city;
        
        // $result= DB::table('details')->find(3); 
        // return $result->roll;
        
        $result= DB::table('details')->pluck('name', 'city');
        return $result;
      }
      
      function Aggregates(){
      
        // $result= DB::table('details')->count();
        // $result= DB::table('details')->max('roll');
        // $result= DB::table('details')->min('roll');
        // $result= DB::table('details')->avg('roll');
        $result= DB::table('details')->sum('roll');
        return $result;
      }

} 