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
            <li class="home"> <a title="Account Dashboard" href="{{route('user-dashboard')}}">Account Dashboard</a><span>&raquo;</span></li>
            <li><strong>Change Password</strong></li>
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
              <form action="{{route('post-customer-password')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-xs-12">
                    <div class="check-title">
                    <div class=" text-center">
                        <h4>Change Password</h4>
                        <div class="title-divider"><span></span></div>
                    </div>
                      
                    </div>
                  </div>
                  @if(Auth::check())
                  <div class="col-xs-12">
                    <label>Current Password:</label>
                    <div class="input-text">
                      <input type="password" name="current_password" id="current_password" class="form-control {{ $errors->has('current_password') ? ' is-invalid' : '' }}" required>
                      @if($errors->has('current_password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('current_password') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <label>New Password:</label>
                    <div class="input-text">
                      <input type="password" name="new_password" id="new_password" class="form-control {{ $errors->has('new_password') ? ' is-invalid' : '' }}" required>
                      @if($errors->has('new_password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('new_password') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <label>Retype New Password:</label>
                    <div class="input-text">
                      <input type="password" name="retype_new_password" id="retype_new_password" class="form-control {{ $errors->has('retype_new_password') ? ' is-invalid' : '' }}" required>
                      @if($errors->has('retype_new_password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('retype_new_password') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                    <div class="submit-text">
                      <button type="submit" class="button" id='change_password'><i class="fa fa-key"></i>&nbsp; <span>Change</span></button>
                    </div>
                  </div>
                  @endif
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