@extends('layouts.landing_layout')
@section('main-content')
<section style='margin-top:100px; background-image:url("landing/images/background1.png"); background-size: cover;'>
    <div class='container'>
      <div class='row'>
        <div class="col-md-6">
          <form method='post' action="{{route('feedback_submit')}}">
          @csrf
            <div class="container row">
              <div class="col-md-12">
                <input type="text" name="sender_name" placeholder="Full Name" class="form-control">
                <!-- <div class="form-icon"><i class="fa fa-user" aria-hidden="true"></i></div> -->
              </div>
              <div class="col-sm-12">
                <input type="text" name="sender_phone" placeholder="Your Phone" class="form-control">
              </div>
              <div class="col-sm-12">
                <input type="email" name="sender_email" placeholder="Your Email" class="form-control">
              </div>
              <div class="col-sm-12">
                <textarea class="form-control" name='sender_message' placeholder="Type Your Message here.." rows='5'></textarea>
              </div>
              <div class='col-sm-12'>
                <p class='notice'>Please Clearify your feedback </p>
              </div>
              <div class="contact-btn">
                <button class='btn btn-warning' type="submit" value="submit" name="submitted"> <i class="fa fa-paper-plane" aria-hidden="true" ></i> Send Message</button>
              </div>
            </div>
          </form>
        </div>
        <div class='col-md-6'>
          <img src='landing/images/feedback1.jpg' class='img img-responsive img-thumbnail'>
        </div>
      </div>
    </div>
</section>
@endsection
