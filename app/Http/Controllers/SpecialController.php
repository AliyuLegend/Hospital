<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use App\Models\Doctor;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    //


  /*  public function doctor($id) {

        $getDoctors = Doctor::select()->orderBy('id', 'desc')->take(6)
         ->where('specialty_id', $id)->get();

         return view('doctors', compact('getDoctors'));
         
    
    } */

    public function doctor($id) {
        $specialty = Specialty::find($id);
        $getDoctors = Doctor::where('specialty_id', $id)->orderBy('id', 'desc')->take(6)->get();
    
        return view('doctors', compact('getDoctors', 'specialty'));
    }
    

   
}
