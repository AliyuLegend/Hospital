@extends('layouts.app')

@section('content')

<div class="container">
    @if(session()->has('error'))
            <div class="alert alert-success">
                {{ session()->get('error') }}
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
                <div class="col-md-8">
                    <h2>Make an Appointment</h2>
                    <ul class="bread-list">
                        <li><a href="">{{ $doctor->name }}</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <!-- Form Card -->
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0" style="color:white;">Make an Appointment</h5>
                        </div>
                        <div class="card-body p-4">
                            <form action="{{ route('bookAppointment', $doctor->id) }}" method="POST" class="appointment-form">
                                @csrf	
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="patient_name" class="form-control" id="patient_name" placeholder="Full Name" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Phone Number" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                                <input type="date" name="appointment_date" class="form-control" id="appointmentDate" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        @if(isset(Auth::user()->id))
                                            <button type="submit" class="btn btn-primary btn-block">Make an Appointment</button>
                                        @else
                                            <p class="alert alert-success">Login to make an Appointment</p>
                                        @endif
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Form Card -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->








@endsection