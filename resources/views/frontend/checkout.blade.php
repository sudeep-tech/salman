@extends('layouts.index')
@section('main-content')
<style>
    .invalid-feedback{
      color:red;
    }
    </style>
<!-- Main Container -->
<section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <form method="post" action="{{route('post-checkout')}}">
              @csrf
        <div class="col-main col-sm-9 col-xs-12">
            <div class="page-title">
              <h2>Checkout</h2>
            </div>
          <div class="page-content checkout-page">
            <h4 class="checkout-sep sub-title" style="font-size:20px;">1.Billing Infomations</h4>
            <div class="box-border" id="billing_box" >
              <ul>
                <li class="row">
                  <div class="col-sm-6">
                    <label for="name" class="required">Full Name</label>
                    <input type="text" class="input form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"  id="name" value="{{@Auth::user()->name}}" disabled>
                    @if($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                  </div>
                 
                  <div class="col-sm-6">
                    <label for="email_address" class="required">Email Address</label>
                    <input type="text" class="input form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"  id="email_address" value="{{@Auth::user()->email}}" disabled>
                    @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                  </div>
                  
                </li>
                <li class="row">
                  <div class="col-sm-6">
                    <label for="company_name">Phone</label>
                    <input type="tel" name="phone" class="input form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" value="{{isset($detail->phone)? @$detail->phone:old('phone') }}" required>
                    @if($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                      @endif
                  </div>

                  <div class="col-sm-6">
                    <label for="company_name">Additional Phone</label>
                    <input type="tel" name="additional_phone" class="input form-control {{ $errors->has('additional_phone') ? ' is-invalid' : '' }}" id="additional_phone" value="{{isset($detail->additional_phone)? @$detail->additional_phone:old('additional_phone') }}">
                    @if($errors->has('additional_phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('additional_phone') }}</strong>
                        </span>
                      @endif
                  </div>
                </li>
               
                <li class="row">
                  <div class="col-xs-12">
                    <label for="address" class="required">Address</label>
                    <input type="text" class="input form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="address" value="{{isset($detail->address)? @$detail->address:old('address') }}" required>
                    @if($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                      @endif
                  </div>
                 
                  
                </li>
               
                
                <li class="row">
                  <div class="col-sm-6">
                    <label for="city" class="required">City</label>
                    <input class="input form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" name="city" id="city" value="{{isset($detail->city)? @$detail->city:old('city') }}" required>
                    @if($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                      @endif
                  </div>
                 
                  <div class="col-sm-3">
                        <label class="required">State/Province</label>
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
                  <div class="col-sm-3">
                    <label class="required">Country</label>
                    <select class="input form-control {{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{isset($detail->country)? @$detail->country:old('country') }}">
                      <option value="nepal">Country</option>
                    </select>
                    @if($errors->has('country'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                      @endif
                  </div>
                  
                </li>
              </ul>
            </div>
               
               
               <!-- @guest
               <hr style="box-shadow:1px 1px 1px 0px red" style="border:5px;">
                <h4 class="checkout-sep" style="font-size:16px;">2. Checkout Method</h4>
                <hr style="box-shadow:1px 1px 1px 0px red" style="border:5px;">
                <div class="box-border" id="checkout_method_box">
                <div class="row ">
                <div class="col-sm-6">
                  <h5>Checkout as a Guest or Register</h5>
                  <p>Register with us for future convenience:</p>
                  <ul>
                    <li>
                      <label>
                        <input type="radio" name="checkout_method" class="checkout_radio" id="guest_checkout" value="guest_checkout">
                        Checkout as Guest</label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" name="checkout_method" class="checkout_radio" id='register_now'  value="register_now">
                        Register</label>
                    </li>
                  </ul>
                  <br>
                  <h4>Register and save time!</h4>
                  <p>Register with us for future convenience:</p>
                  <p><i class="fa fa-check-circle text-primary"></i> Fast and easy check out</p>
                  <p><i class="fa fa-check-circle text-primary"></i> Easy access to your order history and status</p>
                 
                </div>
                <div class="col-sm-6">
                  <h5>Login</h5>
                  <p>Already registered? Please log in below:</p>
                  <form method="post" action="{{route('login')}}">
                      @csrf
                    <label>Email address</label>
                    <input type="text" class="form-control input">
                    <label>Password</label>
                    <input type="password" class="form-control input">
                    @if(Route::has('password.request'))
                        <p><a href="{{ route('password.request') }}">Forgot your password?</a></p>
                    @endif
                    
                    <button type="submit" class="button"><i class="icon-login"></i>&nbsp; <span>Login</span></button>
                  </form>
                </div>
              </div>
            </div>
            @endguest

                <li class="row hidden" id="passwords" style="box-shadow:0px 0px 0px 1px red">
                  <div class="col-sm-6" style="margin-bottom:5px;">
                    <label for="password" class="required">Password</label>
                    <input class="input form-control" type="password" name="password" id="password">
                  </div>
                 
                  
                  <div class="col-sm-6">
                    <label for="confirm" class="required">Confirm Password</label>
                    <input class="input form-control" type="password" name="confirm_password" id="confirm">
                  </div> 
                 
                </li> -->
                <!-- <li>
                  <button class="button"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Continue</span></button>
                </li> -->
              
                
            
            <div class="page-content checkout-page">
                <h4 class="checkout-sep sub-title" style="font-size:20px;">2. Shipping Infomations</h4>
                <div class="billing-checkbox">
                        <input type="checkbox" name="same_as_billing" value="yes"  onchange="document.getElementById('shipping_box').hidden = this.checked; $('.shipping_input').prop('disabled','true'); "  class="sign-up__checkbox ">
                        <label for="sign-up-term" class="sign-up__desc">Same as Billing</label>             
                    </div>
                
                <div class="box-border" id="shipping_box">

                <ul>
                    <li class="row">
                    <div class="col-sm-6">
                        <label for="name" class="required">Full Name</label>
                        <input type="text" class="input form-control shipping_input {{ $errors->has('name') ? ' is-invalid' : '' }}"  id="shipping_name" value="{{@Auth::user()->name}}" disabled>
                    </div>
                    
                    <div class="col-sm-6">
                        <label for="email_address" class="required">Email Address</label>
                        <input type="text" class="input form-control shipping_input {{ $errors->has('email') ? ' is-invalid' : '' }}"  id="shipping_email_address" value="{{@Auth::user()->email}}" disabled>
                    </div>
                    
                    </li>
                    <li class="row">
                    <div class="col-sm-6">
                        <label for="company_name">Phone</label>
                        <input type="tel"  class="input form-control shipping_input {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="shipping_phone" value="{{isset($detail->phone)? @$detail->phone:old('phone') }}" disabled>
                    </div>

                    <div class="col-sm-6">
                        <label for="company_name">Additional Phone</label>
                        <input type="tel"  class="input form-control shipping_input {{ $errors->has('additional_phone') ? ' is-invalid' : '' }}" id="shipping_additional_phone" value="{{isset($detail->additional_phone)? @$detail->additional_phone:old('additional_phone') }}" disabled>
                    </div>
                    </li>
                
                    <li class="row">
                    <div class="col-xs-12">
                        <label for="address" class="required">Address</label>
                        <input type="text" class="input form-control shipping_input {{ $errors->has('shipping_address') ? ' is-invalid' : '' }}" name="shipping_address"  id="shipping_address" value="{{isset($detail->shipping_address)? @$detail->shipping_address:old('shipping_address') }}">
                        @if($errors->has('shipping_address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('shipping_address') }}</strong>
                        </span>
                      @endif
                    </div>
                    
                    
                    </li>
                
                    
                    <li class="row">
                    <div class="col-sm-6">
                        <label for="city" class="required">City</label>
                        <input class="input form-control shipping_input {{ $errors->has('shipping_city') ? ' is-invalid' : '' }}" type="text" name="shipping_city"  id="shipping_city" value="{{isset($detail->shipping_city)? @$detail->shipping_city:old('shipping_city') }}">
                        @if($errors->has('shipping_city'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('shipping_city') }}</strong>
                        </span>
                      @endif
                    </div>
                    
                   
                    <div class="col-sm-3">
                        <label class="required">State/Province</label>
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
                    <div class="col-sm-3">
                        <label class="required">Country</label>
                        <select class="input form-control shipping_input {{ $errors->has('shipping_country') ? ' is-invalid' : '' }}" name="shipping_country" id="shipping_country"  value="{{isset($detail->shipping_country)? @$detail->shipping_country:old('shipping_country') }}">
                        <option value="nepal" selected >Nepal</option>
                        </select>
                        @if($errors->has('shipping_country'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('shipping_country') }}</strong>
                        </span>
                      @endif
                    </div>
                    </li>
                </ul>
                </div> 
                
                <h4 class="checkout-sep sub-title" style="font-size:20px;">3. Payment Information</h4>
                <div class="box-border" id="payment_box"> 
                <ul>
                    <li>
                    <label for="radio_button_5">
                        <input type="radio" checked name="payment_method" value="cash_on_delivery" id="payment_method">
                        Cash On Delivery</label>
                        
                    </li>
                    <hr style="box-shadow:1px 1px 0px 0px silver;">
                    <!-- <li>
                    <label for="radio_button_6">
                        <input type="radio" name="radio_4" id="radio_button_6">
                        Credit card (saved)</label>
                    </li> -->
                </ul>
                
                </div>
            </div>
        
            <h4 class="checkout-sep last sub-title" style="font-size:20px;">4. Order Review</h4>
            <hr style="box-shadow:0px 1px 0px 0px silver;">
            <div class="box-border " id="order_review_box">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th class="cart_product">Product</th>
                      <th>Description</th>
                      <th>Avail.</th>
                      <th>Unit price</th>
                      <th>Qty</th>
                      <th>Total</th>
                      <th class="action"><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                      @if(@Cart::getContent())
                      @forelse(@Cart::getContent() as $ind_cart_item)
                    <tr>
                      <td class="cart_product"><a href="#"><img src="{{asset('uploads/product/'.@$ind_cart_item->attributes->thumb)}}" alt="Product"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#">{{@$ind_cart_item->name}}</a></p>
                        <!-- <small><a href="#">Color : Beige</a></small><br>
                        <small><a href="#">Size : S</a></small></td> -->
                      <td class="cart_avail"><span class="label label-success">In stock</span></td>
                      <td class="price"><span>Nrs. {{number_format(@$ind_cart_item->price)}} </span></td>
                      <td class="qty"><input class="form-control input-sm" disabled type="text" value="{{@$ind_cart_item->quantity}}"></td>
                      @php
                        $ind_cart_total=@$ind_cart_item->quantity*@$ind_cart_item->price;
                      @endphp
                      <td class="price"><span>Nrs. {{number_format(@$ind_cart_total)}} </span></td>
                      <td class="action"><a href="{{route('cart.clear',@$ind_cart_item->id)}}"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                    @empty

                    @endforelse
                    @endif                    
                    
                  </tbody>
                  <tfoot>
                    <!-- <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="3">Total products (tax incl.)</td>
                      <td colspan="2">$160.88 </td>
                    </tr> -->
                    <tr>
                        <td colspan="3" rowspan="2"></td>
                      <td colspan="1"><strong>Total</strong></td>
                      <td colspan="3"><strong style="float:right;">Nrs. {{number_format(@Cart::getSubTotal())}} </strong></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="row">
                  <div class="col-sm-6">
                    <button type="button" onclick="location.href='{{ route('shopping-cart') }}'" class="button pull-right"><span>Edit Cart</span></button>
                  </div>
                  <div class="col-sm-6">
                    <button type='submit' class="button pull-right"><span>Place Order</span></button>
                  </div>
              </div>
             
            </div>
          </div>
        </div>
        </form>

        <aside class="right sidebar col-sm-3 col-md-3 col-xs-12">
          <div class="sidebar-account block">
            <div class="sidebar-bar-title">
              <h3>My Account</h3>
            </div>
            <div class="block-content">
              <ul>
                  <li ><a href="{{route('user-dashboard')}}">Account Dashboard</a></li>
              
                  <li ><a href="{{route('customer-address-book')}}">Address Book</a></li>
                  <li><a href="{{route('orders-list')}}">My Orders</a></li>
                  <li><a href="#">Billing Agreements</a></li>
              
                  <li><a href="#">My Product Reviews</a></li>
                  
                  <li><a href="{{route('wishlist')}}">My Wishlist</a></li>
                  <li ><a href="{{route('shopping-cart')}}">My Cart</a></li>
                  <!-- <li class="last"><a href="#">Newsletter Subscriptions</a></li> -->
              </ul>
            </div>
          </div> 
        </aside>
      </div>
    </div>
  </section>
  <!-- Main Container End -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
      $(document).ready(function(){
      
        $("#register_now").change(function () {
            if($('#passwords').hasClass('hidden')){
                $('#passwords').removeClass('hidden');
            }
        });
        $("#guest_checkout").change(function () {
            if(!$('#passwords').hasClass('hidden')){
                $('#passwords').addClass('hidden');
            }
        });
        
      });
      
  </script>
  @endsection