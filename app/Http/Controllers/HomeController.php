<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use App\Models\doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    } */
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Specials = Specialty::select()->orderBy('id', 'desc')->take(5)->get();
        $doctors = doctor::select()->orderBy('id', 'desc')->take(5)->get();

        return view('home', compact('Specials', 'doctors'));
    }

    public function contact() {

        return view('contact');
    }
}
