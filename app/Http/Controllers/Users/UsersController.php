<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;

class UsersController extends Controller
{
    //

    public function myAppointments() {

        $myappointments = Appointment::where('user_id', Auth::user()->id)
        ->orderBy('id', 'desc')
        ->with('doctor') // Eager load the related doctor model
        ->get();

    return view('appointment', compact('myappointments'));
    }
}
