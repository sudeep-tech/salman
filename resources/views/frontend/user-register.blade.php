@extends('layouts.index')
@section('main-content')
<style>
    .invalid-feedback{
      color:red;
    }
    </style>
 <!-- Breadcrumbs -->
  
 <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('fronthome')}}">Home</a><span>&raquo;</span></li>
            <li><strong>Register</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col1-layout" style="background:#F0EDEC;">
    <div class="main container">
      <div class="page-content">
        <div class="account-login">
          <div class="col-md-3 col-sm-2"></div>
          <div class="col-md-6 col-sm-8">
            <div class="single-input p-bottom50 clearfix">
              <form action="{{route('verify-user-signup-form')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-xs-12">
                    <div class="check-title">
                      <h4>New Customer</h4>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Full Name:</label>
                    <div class="input-text">
                      <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                      @if($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Email:</label>
                    <div class="input-text">
                      <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                      @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <label>Address:</label>
                    <div class="input-text">
                      <input type="text" name="address" id="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}">
                      @if($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>City/Town:</label>
                    <div class="input-text">
                      <input type="text" name="city" id='city' class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}">
                      @if($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>State:</label>
                    <div class="input-text">
                        <select  name="state" id='state' class="input form-control {{ $errors->has('state') ? ' is-invalid' : '' }}">
                            <option value="state1">State 1</option>
                            <option value="state2">State 2</option>
                            <option value="state3">State 3</option>
                            <option value="state4">State 4</option>
                            <option value="state5">State 5</option>
                            <option value="state6">State 6</option>
                            <option value="state7">State 7</option>
                        </select>
                        @if($errors->has('state'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('state') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                 
                  <div class="col-sm-6">
                    <label>Phone:</label>
                    <div class="input-text">
                      <input type="tel" name="phone" id='phone' class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}">
                      @if($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Country:</label>
                    <div class="input-text">
                    <select  name="country" id='country' class="input form-control {{ $errors->has('country') ? ' is-invalid' : '' }}">
                            <option value="nepal" selected> Nepal</option>
                        </select>
                      @if($errors->has('country'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Password:</label>
                    <div class="input-text">
                      <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">
                      @if($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Confirm Password:</label>
                    <div class="input-text">
                      <input type="password" id="password-confirm" name='password_confirmation' class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}">
                      @if($errors->has('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="billing-checkbox">
                        <input type="checkbox"  onchange="document.getElementById('register').disabled = !this.checked;" for="sign-up-term" id='sign-up-terms' class="sign-up__checkbox ">
                        <label for="sign-up-term" class="sign-up__desc">I agree all statements in <a href="#">Terms of Service</a></label>             
                    </div>
                    <div class="submit-text">
                      <button type="submit" class="button" id='register'><i class="fa fa-user"></i>&nbsp; <span>Register</span></button>
                      
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 

@endsection