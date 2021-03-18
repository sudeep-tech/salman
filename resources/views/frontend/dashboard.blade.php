@extends('layouts.index')
@section('main-content')

<!-- Breadcrumbs -->
  
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('fronthome')}}">Home</a><span>&raquo;</span></li>
            <li><strong>My Dashboard</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12">
          <div class="my-account">
            <div class="page-title">
              <h2>My Dashboard</h2>
            </div>
            <div class="dashboard">
              <div class="welcome-msg"> <strong>Hello, {{Auth::user()->name}}</strong>
                <!-- <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p> -->
             
            </div>
            <br>
              <div class="recent-orders">
                <div class="title-buttons"><strong>Recent Orders</strong> <a href="{{route('orders-list')}}">View All </a> </div>
                <div class="table-responsive">
                  <table class="table table-bordered cart_summary table-striped">
                    <colgroup>
                    <col>
                    <col>
                    <col>
                    <col width="1">
                    <col width="1">
                    <col width="1">
                    </colgroup>
                    <thead>
                      <tr class="first last">
                        <th>Order #</th>
                        <th>Order Date</th>
                        <th>Bill & Ship Name</th>
                        <th><span class="nobr">Order Total</span></th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse($orders as $ind_order)
                      <tr class="first odd">
                        <td>#{{@$ind_order->id}}</td>
                        <td>{{@$ind_order->updated_at}} </td>
                        <td> {{Auth::user()->name}}</td>
                        <td><span class="price">Nrs. {{number_format(@$ind_order->total_amount)}}</span></td>
                        <td width='15%'><em><span style="background:lightseagreen; color:white; padding:5px;">@if(@$ind_order->status=='on_process') On Process @else {{ucfirst(@$ind_order->status)}} @endif</span></em></td>
                        <td class=" last"><span class="nobr"> <a href="{{route('order-details',$ind_order->id)}}" class="btn btn-info btn-sm"><i class='fa fa-eye'></i> View Order</a>  <span class="separator"> |</span> <a href="{{route('cancel-order-front',@$ind_order->id)}}" class="btn  btn-xs @if($ind_order->status!='pending') disabled btn-secondary @else btn-danger @endif "><i class='fa fa-trash'></i> Cancel Order</a> </span> </td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="5" class="text-center">No Orders Yet! </td>
                      </tr>
                      @endif
                      
                    </tbody>
                  </table>
                </div>
              </div>
             

              <div class="box-account">
                <div class="page-title">
                  <h2>Account Information</h2>
                </div>
               
                <div class="col2-set">
                  <div class="col-1">
                    <h6>Contact Information</h6>
                    <!-- <a href="#">Edit</a> -->
                    <p> {{Auth::user()->name}}<br>
                      {{Auth::user()->email}}<br>
                      {{@$customer_detail->phone}}<br>
                      @if(isset($customer_detail->additional_phone)) {{@$customer_detail->additional_phone}} @endif<br>
                      <a href="{{route('change-customer-password')}}" class="btn btn-xs btn-info" style="text-decoration:none;"><i class='fa fa-key'></i> Change Password</a> </p>
                  </div>
                  <!-- <div class="col-2">
                    <h5>Newsletters</h5>
                    <a href="#">Edit</a>
                    <p> You are currently not subscribed to any newsletter. </p>
                  </div> -->
                </div> 
                <div class="col2-set">
                  <h5>Address Book</h5>
                  <div class="manage_add"><a href="{{route('customer-address-book')}}" class="btn btn-xs btn-info" style="text-decoration:none;"><i class='fa fa-map'></i> Change Addresses</a> </div>
                  <div class="col-1">
                    <h5>Primary Billing Address</h5>
                    <address>
                    {{Auth::user()->name}}<br>
                    {{ucfirst(@$customer_detail->address)}}<br>
                    {{ucfirst(@$customer_detail->city).', '.ucfirst(@$customer_detail->state)}}<br>
                    {{ucfirst(@$customer_detail->country)}}<br>
                   
                    <!-- <a href="#">Edit Address</a> -->
                    </address>
                  </div>
                  <div class="col-2">
                    <h5>Primary Shipping Address</h5>
                    <address>
                    {{Auth::user()->name}}<br>
                    {{ucfirst(@$customer_detail->shipping_address)}}<br>
                    {{ucfirst(@$customer_detail->shipping_city).', '.ucfirst(@$customer_detail->shipping_state)}}<br>
                    {{ucfirst(@$customer_detail->shipping_country)}}<br>
                   
                   
                    <!-- <a href="#">Edit Address</a> -->
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <aside class="right sidebar col-sm-3 col-xs-12">
          <div class="sidebar-account block">
            <div class="sidebar-bar-title">
              <h3>My Account</h3>
            </div>
            <div class="block-content">
              <ul>
                <li class="current"><a>Account Dashboard</a></li>
               
                <li><a href="{{route('customer-address-book')}}">Address Book</a></li>
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
  </section>
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