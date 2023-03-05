<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontendontroller extends Controller
{
   public function onama()
   {
       return view('onama');      
   }
   public function proizvodi()
   {
       return view('proizvodi');      
   }
    
}