@extends('layouts.landing_layout')

@section('main-content')

<!-- blog detail area start -->
<img src='landing/img/banner/banner-ourteam.jpg'>
    <!-- {{-- Location Section Start --}} -->
    <div class='container-fluid pt-50' id='location_section'>
        <h3 class='text-center'>Location</h3>
        <center><h3> You can reach out to us in our location</h3></center>
        <address>44614,Bhansar Road, Teku, Kathmandu, Nepal</address>
        <div class="row">
            <div class='col-md-12 col-12'>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220.79268642762176!2d85.3037461101707!3d27.696191417084187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb185087e41e2d%3A0xc8c4eed9c2b71cec!2sGemini+Solutions+Nepal+Pvt.+Ltd.!5e0!3m2!1sen!2snp!4v1562218030131!5m2!1sen!2snp" width='100%' height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
        </div>
    </div>
    <!-- {{-- Location Section Ends  --}} -->
<section class="blog-details-area">
    
    <div class="container-fluid">
        <div class='container col-md-8 col-md-offset-2'>
            <hr class='yellow_line'>
        </div>
        <!-- Post Details Text -->
        <div class="post-details-text">
            <div class="justify-content-center">
                
                <div class="container col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
                   
                    @if(isset($status))

                        <p class='alert alert-warning'>{{$status}}</p>

                    @endif
                    <!-- {{-- Get In Touch Section Start --}} -->
                    <div class='container' id='get_in_touch_section'>
                        <h3 class='text-center'>Get In Touch</h3>
                        <p style='font-size:20px;'>We work very hard to provide you the best service we can at a moment. If you have any query related to our service, please feel free to contact us.

                        We are here to help you.</p>

                    </div>

                    @if(isset($public_contact))

                    @php 

                    $counter=1;

                    @endphp

                    <div class='row'>

                        @foreach($public_contact as $key=>$ind_contact)

                            <div class='col-6 col-sm-6 col-md-6 col-lg-6'>

                                <div class="card" style="width:30rem;" style="margin:5px;">

                                    <div class="card-body">

                                        <h5 class="card-title text-center"><b>{{$ind_contact->full_name}}</b></h5>

                                        <h6 class='card-text text-center'>{{$ind_contact->department}}</h6>

                                        <p class="card-text text-center">Phone: {{$ind_contact->phone}}</p>

                                        <p class="card-text text-center">E-mail: {{$ind_contact->email}}</p>

                                    </div>

                                </div>

                            </div>

                            @if($counter%2==0)

                    </div>

                    <div class='container row'>
                            @endif
                            @php
                                $counter++;
                            @endphp
                        @endforeach
                    </div>
                    @endif
                    <div class="post-details-text">
                        <div class="row justify-content-center">
                            <div class='container-fluid'>
                                <div class="razo-contact-form">
                                    <h3 class="mb-4 text-center">Get updated to our latest offers and products. Subscribe us</h3>
                                    <form method='post' class='form' action="{{route('subscribe')}}">
                                    @csrf
                                    <div class='row'>
                                        <div class='col-6'>
                                            <div class="form-group  col-12">
                                                <input type="email" name="subscriber_email" placeholder="Your E-mail" class="form-control {{ ($errors->has('subscriber_email') ? 'is-invalid' : '') }}" required>
                                                @if($errors->has('subscriber_email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('subscriber_email') }}</strong>
                                                    </span>
                                                @endif
                                                
                                            </div>
                                            <div class="contact-btn col-sm-12 col-md-6 col-lg-6">
                                                <button class='btn btn-success btn-lg' type="submit" > <i class="fa fa-paper-plane" aria-hidden="true" ></i> Subscribe</button>
                                            </div>
                                        </div>
                                        <div class='col-6'>
                                            <img src="{{ asset('landing/img/subscribe.jpg') }}" class='img img-responsive img-thumbnail img-responsive' style="border:none;">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <!-- Get In Touch Section Ends -->
                    <hr class='yellow_line'/>

                    <!-- Feedback Section Start  -->
                    <div class="post-details-text" style="padding-bottom:10px;">
                        <div class="row justify-content-center">
                            <div class='container-fluid'>
                            <!-- <div class="col-12 col-sm-10 col-xl-9 col-lg-6"> -->
                                <div class="razo-contact-form">
                                    <h3 class="mb-4 text-center">Give Us Some Feedback</h3>
                                    <form method='post' class='form' action="{{route('feedback_submit')}}">
                                    @csrf
                                    <div class='row'>
                                        <div class='col-6'>
                                            <div class="form-group  col-12">
                                                <input type="text" name="sender_name" placeholder="Full Name" class="form-control {{ ($errors->has('sender_name') ? 'is-invalid' : '') }}" required>
                                                @if($errors->has('sender_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('sender_name') }}</strong>
                                                    </span>
                                                @endif
                                                <!-- <div class="form-icon"><i class="fa fa-user" aria-hidden="true"></i></div> -->
                                            </div>
                                            <div class="form-group  col-12">
                                                <input type="tel" name="sender_phone" placeholder="Your Phone" class="form-control {{ ($errors->has('sender_phone') ? 'is-invalid' : '') }}" maxlength="15" minlength="9">
                                                @if($errors->has('sender_phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('sender_phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group   col-12">
                                                <input type="email" name="sender_email" placeholder="Your Email" class="form-control {{ ($errors->has('sender_email') ? 'is-invalid' : '') }}" required>
                                                @if($errors->has('sender_phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('sender_phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group  col-12">
                                                <textarea class="form-control {{ ($errors->has('sender_message') ? 'is-invalid' : '') }}" name='sender_message' placeholder="Type Your Message here.." rows='5' required></textarea>
                                                @if($errors->has('sender_message'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('sender_message') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class=' col-12'>
                                                <p>Please Clearify your feedback </p>
                                            </div>
                                            <div class="contact-btn col-sm-12 col-md-6 col-lg-6">
                                                @if(Auth::check())
                                                <input type='hidden' name='sender_user_id' value="{{Auth::id()}}">
                                                @endif
                                                <button class='btn btn-warning btn-lg' type="submit"> <i class="fa fa-paper-plane" aria-hidden="true" ></i> Send Message</button>
                                            </div>

                                        </div>
                                        <div class='col-6'>
                                            <img src="{{ asset('landing/img/feedback1.jpg') }}" class='img img-responsive img-thumbnail' style="border:none;">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>

                    <!-- {{-- Feedback Section Ends --}} -->
                   
                </div>
            </div>
        </div>
    </div>
</section>


@endsection