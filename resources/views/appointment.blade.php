@extends('layouts.app')

@section('content')

<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>MY BOOKINGS</h2>
                    <ul class="bread-list">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<div class="container">


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
        @php
          $cnt = 1;
        @endphp
  @foreach ($myappointments as $appointment)
  
  <tr>
      <td>{{ $cnt }}</td>
      <th scope="row">{{ $appointment->patient_name }}</th>
      <td>{{ $appointment->email }}</td>
      <td>{{ $appointment->phone_number }}</td>
      <td>{{ $appointment->appointment_date }}</td>
      <td>{{ $appointment->doctor->name }}</td>
      <td>{{ $appointment->status }}</td>
    </tr>

    @php
        $cnt++;
      @endphp
      
  @endforeach
  </tbody>
</table>

<div class="mt-4 text-center">
  <p style="color:red;"><em>Please make sure to recheck the date of your appointment as the doctor might reschedule it to a time when they are available. Thank you for your understanding.</em></p>
</div>


</div>
   

@endsection