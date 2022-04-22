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
      
      function detailsCreate(Request $request){
           $name= $request->input("name");
           $roll= $request->input("roll");
           $city= $request->input("city");
           $phone= $request->input("phone");
           $class= $request->input("class");
           
          $sql ="INSERT INTO `details`(`name`, `roll`, `city`, `phone`,`class`) VALUES (?,?,?,?,?)";
          $result= DB::insert($sql, [$name,$roll,$city,$phone,$class]);
          
          if($result==true){
            return "Data Inserted Successful";
          }else{
            return "Data Failed!Try Again";
          }
      }
      
      function detailsUpdate(){
      
      }
      
      function detailsDelete(){
      
      }
}