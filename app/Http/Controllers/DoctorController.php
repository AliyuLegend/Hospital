<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use DateTime;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class DoctorController extends Controller
{
    //

   /* public function doctorDetails($id) {

        $getDoctorDetails = Doctor::find($id);
         
         return view('doctordetails', compact('getDoctorDetails'));
         
    
    } */
    public function doctorDetails($id) {
        $doctor = Doctor::find($id);
        if (!$doctor) {
            return redirect()->route('home')->with('error', 'Doctor not found.');
        }
        return view('doctordetails', compact('doctor'));
    }
    

    public function bookAppointment(Request $request, $id)
    {
        $doctors = Doctor::find($id);

        // Ensure the appointment date is in the future
        $currentDate = new \DateTime();
        $appointmentDate = new \DateTime($request->appointment_date);

        if ($appointmentDate > $currentDate) {
            $bookAppointment = Appointment::create([
                'doctor_id' => $doctors->id,
                'user_id' => Auth::user()->id,
                'patient_name' => $request->patient_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'appointment_date' => $request->appointment_date,
            ]);

            return redirect()->route('doctordetails', $doctors->id)->with('success', 'Appointment booked successfully');
        } else {
            return redirect()->route('doctordetails', $doctors->id)->with('error', 'Appointment date should be in the future');
        }
    }

    
    
}
