<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
 public function index(){
     $name = "Ngone";
     $age = 50;
     $tab = array('name' => "Ngone", 'age' => 50);
     return view ('myview', $tab);

 }
}
