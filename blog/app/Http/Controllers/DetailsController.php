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
      
      function detailsUpdate(Request $request){
        $id= $request->input("id");
        $name= $request->input("name");
        $city= $request->input("city");
        $sql= "UPDATE `details` SET `name`=?, `city`=? WHERE `id`=?";
        $result= DB::update($sql, [$name, $city, $id]);
        
        if($result==true){
          return "Data Updated";
        }else{
          return "Updated Failed!Try Again";
        }
      }
      
      function detailsDelete(Request $request){
        $id= $request->input("id");
        $sql= "DELETE FROM `details` WHERE `id`=? ";
        $result= DB::delete($sql, [$id]);
        
        if($result==true){
          return "Data Deleted";
        }else{
          return "Deleted Failed!Try Again";
        }
      }
}