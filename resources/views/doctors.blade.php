@extends('layouts.app')

@section('content')



<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $specialty->name }}</h2>
                    <ul class="bread-list">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">{{ $specialty->name }} Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Single News -->
<section class="news-single section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="single-main">
                            <!-- News Head -->
                            <div class="news-head">
                                <img src="{{ asset('assets/img/blog1.jpg') }}" alt="#">
                            </div>
                            <!-- News Title -->
                            <h1 class="news-title text-primary">About {{ $specialty->name }}.</h1>
                            <!-- News Text -->
                            <div class="news-text">
                                <p>{{ $specialty->about1 }}.</p>
                                <p>{{ $specialty->about2 }}.</p>
                                <div class="image-gallery">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-image">
                                                <img src="{{ asset('assets/img/blog2.jpg') }}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-image">
                                                <img src="{{ asset('assets/img/blog3.jpg') }}" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>{{ $specialty->about3 }}.</p>
                                <p>{{ $specialty->about4 }}.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="main-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <h3 class="title text-primary">Make an Appointment with {{ $specialty->name }} Doctors</h3>
                        @foreach ($getDoctors as $doctor)
                            <ul class="categor-list">
                                <li><a href="{{ route('doctordetails', $doctor->id) }}">{{$doctor->name}}</a></li>
                                <li><b>Qualification: </b>{{ $doctor->qualification}}</li>
                                <li><b>Experience: </b>{{ $doctor->experience }}</li>
                            </ul>
                        @endforeach
                        
                    </div>
                    <!--/ End Single Widget -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Single News -->




@endsection