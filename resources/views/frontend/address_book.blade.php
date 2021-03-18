@extends('layouts.index')
@section('main-content')

<!-- Breadcrumbs -->
  
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('fronthome')}}">Home</a><span>&raquo;</span></li>
            <li class="home"> <a title="Account Dashboard" href="{{route('user-dashboard')}}">Account Dashboard</a><span>&raquo;</span></li>
            <li><strong>Address Book</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->

















        
        
        <div class="inner-box">
            <div class='container'>
            <div class="row">
                <!-- Featured products -->
                <div class="col-sm-9 col-xs-12 col-md-9 jtv-best-sale special-pro">
                    <div class="jtv-best-sale-list">
                        <div class="wpb_wrapper">
                            <div class="best-title text-left">
                                <h2>Address Book</h2>
                            </div>
                        </div>
                        
                        <form action="{{route('post-customer-detail-front')}}" method="post">
                        @csrf
                        
                       
                        
                            <div class="col-xs-12">
                            <label>Phone:</label>
                            <div class="input-text">
                            <input type="text" name="phone" value="{{isset($detail->phone)? @$detail->phone:old('phone') }}" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" required>
                            @if($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <label>Additional phone:</label>
                            <div class="input-text">
                            <input type="text" name="additional_phone" id="additional_phone" class="form-control {{ $errors->has('additional_phone') ? ' is-invalid' : '' }}" value="{{isset($detail->additional_phone)? @$detail->additional_phone:old('additional_phone') }}">
                            @if($errors->has('additional_phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('additional_phone') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-6 col-xs-12" style="margin-top:10px; margin-left:0px;" >
                            <div class="col-xs-12">
                                <div class="page-title">
                                    <h2>Billing Address</h2>
                                </div>
                            </div>  
                            <div class="col-xs-12">
                                <label>Billing Address1:</label>
                                <div class="input-text">
                                <input type="text" name="address" id="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{isset($detail->address)? @$detail->address:old('address') }}" required>
                                @if($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <label>Billing City:</label>
                                <div class="input-text">
                                <input type="text" name="city" id="city" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" value="{{isset($detail->city)? @$detail->city:old('city') }}" required>
                                @if($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <label>Billing State:</label>
                                <div class="input-text">
                                <select class="input form-control {{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" id="state">
                                @php $state=@$detail->state; @endphp
                                @for($i=1;$i<=7;$i++)
                                    <option value="{{'state'.$i }}" {{(@$state=='state'.$i)?'selected':''}}>State {{$i}}</option>
                                @endfor
                                </select>
                                @if($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <label>Billing Country:</label>
                                <div class="input-text">
                                <select name="country" class="form-control {{ $errors->has('country') ? ' is-invalid' : '' }}" value="{{isset($detail->country)? @$detail->country:old('country') }}" required>
                                    <option value="nepal" selected>Nepal</option>
                                </select>
                                @if($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="col-xs-12">
                                <div class="page-title">
                                    <h2>Shipping Address</h2>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <label>Shipping Address1:</label>
                                <div class="input-text">
                                <input type="text" name="shipping_address" id="shipping_address" class="form-control {{ $errors->has('shipping_address') ? ' is-invalid' : '' }}" value="{{isset($detail->shipping_address)? @$detail->shipping_address:old('shipping_address') }}" >
                                @if($errors->has('shipping_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('shipping_address') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <label>Shipping City:</label>
                                <div class="input-text">
                                <input type="text" name="shipping_city" id="city" class="form-control {{ $errors->has('shipping_city') ? ' is-invalid' : '' }}" value="{{isset($detail->shipping_city)? @$detail->shipping_city:old('shipping_city') }}">
                                @if($errors->has('shipping_city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('shipping_city') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <label>Shipping State:</label>
                                <div class="input-text">
                                @php $shipping_state=@$detail->shipping_state; @endphp
                        <select class="input form-control shipping_input {{ $errors->has('shipping_state') ? ' is-invalid' : '' }}" name="shipping_state"  id="shipping_state">
                        @for($i=1;$i<=7;$i++)
                            <option value="{{'state'.$i }}" {{(@$shipping_state=='state'.$i)?'selected':''}}>State {{$i}}</option>
                        @endfor
                        </select>
                                @if($errors->has('shipping_state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('shipping_state') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <label>Shipping Country:</label>
                                <div class="input-text">
                                <select name="shipping_country" class="form-control {{ $errors->has('country') ? ' is-invalid' : '' }}" value="{{isset($detail->shipping_country)? @$detail->shipping_country:old('shipping_country') }}">
                                    <option value="nepal" selected>Nepal</option>
                                </select>
                                @if($errors->has('shipping_country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('shipping_country') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="col-xs-12" style="margin-top:10px;">
                                <div class="submit-text">
                                <button type="submit" class="button btn-lg pull-right" id='save' style="font-size:13px;"><i class="fa fa-save fa-2x"></i>&nbsp; <span>SAVE</span></button>
                                </div>
                            </div>
                        </div>  
                        
                    </form>


                    </div>
                </div>
                <aside class="right sidebar col-sm-3 col-md-3 col-xs-12">
                    <div class="sidebar-account block">
                        <div class="sidebar-bar-title">
                        <h3>My Account</h3>
                        </div>
                        <div class="block-content">
                        <ul>
                            <li ><a>Account Dashboard</a></li>
                        
                            <li class="current"><a href="{{route('customer-address-book')}}">Address Book</a></li>
                            <li><a href="{{route('orders-list')}}">My Orders</a></li>
                            <li><a href="#">Billing Agreements</a></li>
                        
                            <li><a href="#">My Product Reviews</a></li>
                            
                            <li><a href="{{route('wishlist')}}">My Wishlist</a></li>
                            <li><a href="{{route('shopping-cart')}}">My Cart</a></li>
                            <!-- <li class="last"><a href="#">Newsletter Subscriptions</a></li> -->
                        </ul>
                        </div>
                    </div> 
                </aside>

            </div>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
        
       
   

  <!-- service section -->
  <div class="jtv-service-area">
    <div class="container">
      <div class="row">
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper ship">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
              <div class="service-wrapper">
                <h3>World-Wide Shipping</h3>
                <p>On order over $99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12 ">
          <div class="block-wrapper return">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
              <div class="service-wrapper">
                <h3>30 Days Return</h3>
                <p>Moneyback guarantee </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper support">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
              <div class="service-wrapper">
                <h3>Support 24/7</h3>
                <p>Call us: ( +123 ) 456 789</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper user">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
              <div class="service-wrapper">
                <h3>Member Discount</h3>
                <p>25% on order over $199</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection