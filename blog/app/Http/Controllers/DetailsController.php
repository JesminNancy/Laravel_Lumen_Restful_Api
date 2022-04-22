<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use illuminate\support\Facades\DB;
class DetailsController extends Controller{

      function detailsSelect(Request $request){
            $sql= "SELECT * FROM details";
            $request= DB::select($sql);
            return $request;
      }
      
      function detailsCreate(){
      
      }
      
      function detailsUpdate(){
      
      }
      
      function detailsDelete(){
      
      }
}