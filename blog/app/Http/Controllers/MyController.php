<?php
namespace App\Http\Controllers;
use App\Models\User;

class MyController extends Controller{

    function My($name){
    
      return response($name)
        ->header('name', $name)
        ->header('age', 30)
        ->header('city', 'Dhaka')
        ->header('username', 'nancy');
    }
}