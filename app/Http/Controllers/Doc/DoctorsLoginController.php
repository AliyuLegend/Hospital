<?php

namespace App\Http\Controllers\Doc;


use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Doctor; 

class DoctorsLoginController extends Controller
{
    //
    public function viewLogin() {

        return view('Doc.login');
    }


    public function checkLogin(Request $request) {

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('Doctor')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            
            return redirect() -> route('doc.index');
        }
        return redirect()->back()->with(['error' => 'Error logging in, Check in your Credentials']);

    }

    public function index() {

        $doctorId = Auth::guard('Doctor')->id(); // Get the logged-in doctor's ID
        $myappointment = Appointment::where('doctor_id', $doctorId)->orderBy('id', 'desc')->get();

        return view('Doc.index', compact('myappointment'));

    
    }

    public function  editStatus($id) {

        $appointments = Appointment::find($id);

        return view('Doc.editstatus', compact('appointments'));
    }

    public function  updateStatus(Request $request, $id) {


        $status = Appointment::find($id);
        $status->update($request->all());

      
        if($status) {
            
            return Redirect::route('doc.index')->with(['update' => 'Status Updated Successfully']);
        }
    }


    
    public function profile()
    {
        $doctor = Auth::guard('Doctor')->user(); // Get the logged-in doctor's details
    
        if (!$doctor) {
            return redirect()->route('login')->with('error', 'You must be logged in to view this page.');
        }
    
        return view('Doc.profile', compact('doctor'));
    }
    

    public function updateProfile(Request $request, $id)
    {
        
        $doc = Doctor::findOrFail($id);

        $request->validate([
           'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:doctor,email,' . $doc->id,
            'password' => 'nullable',
        ]);

        $doc->name = $request->input('name');
        $doc->email = $request->input('email');

        if ($request->filled('password')) {
            $doc->password = Hash::make($request->input('password'));
        }

        $doc->save(); // Save the doctor's details to the database

        return redirect()->route('doc.index')->with('success', 'Profile updated successfully.');
    }



}
