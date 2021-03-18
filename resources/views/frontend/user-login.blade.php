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
            <li><strong>Login</strong></li>
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
              <form action="{{route('login')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-xs-12">
                    <div class="check-title">
                    <div class=" text-center">
                      <h3>Login</h3>
                      <div class="title-divider"><span></span></div>
                    </div>
                      <!-- <h4>Login</h4> -->
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <label>Email:</label>
                    <div class="input-text">
                      <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" required>
                      @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <label>Password:</label>
                    <div class="input-text">
                      <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                      @if($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                 
                  <div class="col-xs-12">
                    <div class="billing-checkbox">
                        <input type="checkbox"  class="sign-up__checkbox form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="sign-up__desc" style="margin-left:20px;"> {{ __('Remember Me') }} </label>                  
                    </div>

                    <div class="submit-text">
                      <button type="submit" class="button" id='login'><i class="fa fa-user"></i>&nbsp; <span>Login</span></button>
                    </div>
                  </div>
                  @if (Route::has('password.request'))
                    <div class="col-xs-12 col-sm-12 col-md-6" style="margin-top:15px;">
                        <div class="submit-text">
                        <a href="{{ route('user-password-request') }}" class="button" ><i class="fa fa-key"></i>&nbsp; <span>Forgot Your Password?</span></a>
                        </div>
                    </div>  
                  @endif
                  <div class="col-xs-12 col-sm-12 col-md-6" style="margin-top:15px;">
                    <div class="submit-text">
                      Not Signed In? <a href="{{ route('user-register') }}" class="button" ><i class="fa fa-user"></i>&nbsp; <span>Register Now</span></a>
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