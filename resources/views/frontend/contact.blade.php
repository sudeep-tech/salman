@extends('layouts.index')
@section('main-content')

	<!-- Breadcrumbs -->
  
	<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('fronthome')}}">Home</a><span>&raquo;</span></li>
            <li><strong>Contact Us</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
          <div id="contact" class="page-content page-contact">
            <div class="page-title">
              <h2>Contact Us</h2>
            </div>
            <!-- <div id="message-box-conact">We're available for new projects</div> -->
            <div class="row">
              <div class="col-xs-12 col-sm-6" id="contact_form_map">
                <h3 class="page-subheading">Let's get in touch</h3>
                <p>We appreciate your feedbacks for us. We mostly care about our valued customer. So if you have anything to say or have any suggestion please feel free to contact us.</p>
                <br/>
                <ul>
                  <li><i class="fa fa-circle"></i>You can send us your feedback and suggestions.</li>
                  <li><i class="fa fa-circle"></i>You can send us any inquery you have regarding our service.</li>
                  <li><i class="fa fa-circle"></i>You can contact us to engage with us.</li>
                  <li><i class="fa fa-circle"></i>We take your messages and feedbacks seriously.</li>
                </ul>
                <br/>
                <ul class="store_info">
                  <li><i class="fa fa-home"></i>Address: BhansarMarg-12, Teku, Kathmandu, Nepal</li>
                  <li><i class="fa fa-phone"></i><span>Phone: +977 01-4267694</span></li>
                  <li><i class="fa fa-phone"></i><span>Mobile Ncell : +977-9801-077147 | 148 | 9810255916 </span></li>
                  <li><i class="fa fa-phone"></i><span>Mobile NTC : +977-9841-977193</span></li>
                  <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:info@aafnaideal.com">info@aafnaideal.com</a></span></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <h3 class="page-subheading">Make an enquiry</h3>
                <form method="post" action="{{route('send-contact')}}">
                  @csrf
                  <div class="contact-form-box">
                    <div class="form-selector">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control input-sm {{($errors->has('name')?'is-invalid':'') }}" id="name" value="@if(Auth::check()) {{Auth::user()->name}} @else {{old('name')}} @endif" />
                      @if($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-selector">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control input-sm {{($errors->has('email')?'is-invalid':'') }}" id="email" value="@if(Auth::check()) {{Auth::user()->email}} @else {{old('email')}} @endif" />
                      @if($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-selector">
                      <label>Phone</label>
                      <input type="tel" name="phone" class="form-control input-sm {{($errors->has('phone')?'is-invalid':'') }}" value="{{old('phone')}}" id="phone" />
                      @if($errors->has('phone'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-selector">
                      <label>Message</label>
                      <textarea name="message" class="form-control input-sm {{($errors->has('message')?'is-invalid':'') }}" rows="10" id="message">{{old('message')}}</textarea>
                      @if($errors->has('message'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('message') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-selector">
                      <button type="submit" class="button"><i class="icon-paper-plane icons"></i>&nbsp; <span>Send Message</span></button>
                      &nbsp; <button type="reset" class="button" ><i class="fa fa-trash"></i>&nbsp;Clear</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
@endsection