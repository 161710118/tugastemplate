<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Latihan;

class TugasController extends Controller
{
   public function asiswa(){
    $c=latihan::all();        
    return view('halaman',compact('c')); 
    }
}
