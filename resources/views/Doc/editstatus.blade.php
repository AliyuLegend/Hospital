@extends('layouts.doc')

@section('content')


<div class="container">

<div class="row">
    <div class="col-lg-6 offset-lg-2">
        <h5 class="card-title mb-3 d-inline">Edit Status</h5>
        <div class="card">
            <div class="card-body">
                <p>Current Status: <b>{{ $appointments->status }}</b></p>
                <form method="POST" action="{{ route('appointment.update.status', $appointments->id) }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group mb-4">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option>Choose Status</option>
                            <option value="Processing">Processing</option>
                            <option value="Accepted">Accepted</option>
                            <option value="Rejected">Reject</option>
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="date">Appointment Date</label>
                        <input type="date" class="form-control" id="date" name="appointment_date" value="{{ $appointments->appointment_date }}"  required>
                    </div>


                    <button type="submit" name="submit" class="btn btn-primary mb-4">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
  @endsection