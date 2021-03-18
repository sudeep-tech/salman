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
            <li><strong>Orders List</strong></li>
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
              <h2>Orders List</h2>
            </div>
            <div class="orders-list table-responsive"> 
              <!--orders list table-->
              <table class="table table-bordered cart_summary table-striped">
                <thead>
                  <tr> 
                    <!--titles for td-->
                    <th>Order Number</th>
                    <th>Order Date</th>
                    <th>Payment Status</th>
                    <th>Total Quantity</th>
                    <th>Total Amount</th>
                    <th>Order Status</th>
                    <th>Actions</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @if(isset($details))
                    @forelse(@$details as $ind_detail)
                    <tr>
                   
                        <!--order number-->
                        <td data-title="Order Number"><a href="{{route('order-details',@$ind_detail->id)}}" class="order-number">#{{@$ind_detail->id}}</a></td>
                        <!--order date-->
                        <td class="text-center" data-title="Order Date">{{@$ind_detail->created_at}}</td>
                        <td  data-title="Payment Status"><span style="background:mediumseagreen; color:white; padding:5px;">{{ucfirst(@$ind_detail->payment_status)}}</span></td>
                        <!--quanity-->
                        <td class="text-center" data-title="Total Quantity"><span class="order-number">{{@$ind_detail->total_quantity}}</span></td>

                        <td class="text-center" data-title="Total Amount"><span class="order-total">Nrs. {{number_format(@$ind_detail->total_amount)}}</span></td>
                        <!--order status-->
                        <td  data-title="Order Status"><span style="@if(@$ind_detail->status=='cancelled') background:silver; @else background:lightseagreen; @endif color:white; padding:5px;">@if(@$ind_detail->status=='on_process') On Process @else {{ucfirst(@$ind_detail->status)}} @endif</span></td>  
                        <td data-title="Order Details" class="text-center" width='auto'><a href="{{route('order-details',@$ind_detail->id)}}" class="btn btn-info btn-sm" data-title="Order Detail"><span >view</span></a>
                         <span class="separator"> |</span> <a href="{{route('cancel-order-front',@$ind_detail->id)}}" class="btn @if(@$ind_detail->status!='pending') disabled btn-secondary @else btn-danger @endif btn-xs" data-title="Cancel Order"><span >Cancel</span></a>
                        <!-- style="background:olivedrab; color:white; padding:4px;  -->
                        </td>
                        
                    </tr>
                  @empty
                 
                  @endforelse
                  @endif
                </tbody>
              </table>
              
              <div class='pull-right' style="background:grey; padding-left:20px; padding-right:20px;">
              {{$details->links()}}
              </div>
           
            </div>
          </div>
        </div>
        <aside class="right sidebar col-sm-3 col-md-3 col-xs-12">
                <div class="sidebar-account block">
                    <div class="sidebar-bar-title">
                    <h3>My Account</h3>
                    </div>
                    <div class="block-content">
                    <ul>
                        <li ><a href="{{route('user-dashboard')}}">Account Dashboard</a></li>
                    
                        <li ><a href="{{route('customer-address-book')}}">Address Book</a></li>
                        <li class="current"><a href="{{route('orders-list')}}">My Orders</a></li>
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

  @endsection