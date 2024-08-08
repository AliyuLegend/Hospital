@extends('layouts.doc')

@section('content')

          <div class="container">
            @if(session()->has('update'))
                    <div class="alert alert-success">
                        {{ session()->get('update') }}
                    </div>
                @endif
    </div>

    <div class="container">
      @if(session()->has('delete'))
              <div class="alert alert-success">
                  {{ session()->get('delete') }}
              </div>
          @endif
</div>

    <div class="container">
      @if(session()->has('success'))
              <div class="alert alert-success">
                  {{ session()->get('success') }}
              </div>
          @endif
    </div>
    
    <!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>APPIOINTMENT</h2>
                    <ul class="bread-list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Patient Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Appointment Date</th>
                <th scope="col">Status</th>
                <th scope="col">Change Status</th>
              </tr>
            </thead>
            <tbody>

                @php
                $cnt = 1;
              @endphp
              @foreach ($myappointment as $app)
                <tr>
                  <td>{{ $cnt }}</td>
                  <td>{{ $app->patient_name }}</td>
                  <td>{{ $app->phone_number }}</td>
                  <td>{{ $app->appointment_date}}</td>
                  <td>{{ $app->status}}</td>
                 
                  <td><a href="{{ route('appointment.edit.status', $app->id)}}" class="btn btn-warning  text-center text-white">Change Status</a></td>
                </tr>

                @php
                $cnt++;
              @endphp

              @endforeach
            
            </tbody>
          </table> 

     
@endsection