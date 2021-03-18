@extends('layouts.index')
@section('main-content')

 <!-- Breadcrumbs -->

 <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('fronthome')}}">Home</a><span>&raquo;</span></li>
            <li><strong>Order Information</strong></li>
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
              <h2>Order Information</h2>
            </div>
            <div class="orders-list table-responsive"> 
              <!--order info tables-->
              <table class="table table-bordered cart_summary table-striped">
              
                <tr>
                  <td class="order-number">Order Number</td>
                  <td data-title="Order Number">#{{@$detail->id}}</td>
                </tr>
                <tr>
                  <td class="order-number">Order Date</td>
                  <td data-title="Order Date">{{@$detail->created_at}}</td>
                </tr>
                <tr>
                  <td class="order-number">Order Status</td>
                  <td data-title="Order Status">@if(@$detail->status=='on_process') On Process @else {{ucfirst(@$detail->status)}} @endif</td>
                </tr>
                <tr>
                  <td class="order-number">Last Updated</td>
                  <td data-title="Last Update">{{@$detail->updated_at}}</td>
                </tr>
                <tr>
                  <td class="order-number">Shipment</td>
                  <td data-title="Shipment">Home Delivery</td>
                </tr>
                <tr>
                  <td class="order-number">Payment</td>
                  <td data-title="Payment">Cash On hand</td>
                </tr>
                <tr>
                  <td class="order-number">Comment</td>
                  <td data-title="Comment">{{$detail->order_note}}</td>
                </tr>
                <tr>
                  <td class="order-number">Total</td>
                  <td data-title="Total"><p><b>Nrs. {{number_format(@$detail->total_amount)}}</b></p></td>
                </tr>
              </table>
            </div>
            <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="page-title">
                    <h2>Order Summary</h2>
                </div>
               
                <table class="table table-bordered cart_summary" style="border-left: 1px solid silver;">
                    <thead>
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        @if(isset($detail->orderProducts))
                        @forelse(@$detail->orderProducts as $ind_order_product)
                        <tr>
                            <td data-title="Product Name" >{{$ind_order_product->product_name}}</td>
                            <td data-title="Product Quantity" >{{$ind_order_product->product_quantity}}</td>
                            <td data-title="Product Price" >Nrs. {{number_format($ind_order_product->product_price)}}</td>
                            @php 
                                $total=@$ind_order_product->product_price*$ind_order_product->product_quantity;
                            @endphp
                            <td data-title="Product Total">Nrs. {{number_format($total)}}</td>
                        </tr>
                        @empty

                        @endforelse
                        @endif
                    </tbody>
                </table>
              </div>
              <div class="col-xs-12 col-md-6 col-sm-6">
                <div class="page-title">
                    <h2>Bill To</h2>
                </div>
          
                <table class="table table-bordered cart_summary">
                  <tr>
                    <td>E-Mail</td>
                    <td data-title="E-Mail" ><a href="mailto:{{Auth::user()->email}}" class="color_dark">{{Auth::user()->email}}</a></td>
                  </tr>
                  
                  <tr>
                    <td>Full Name</td>
                    <td data-title="Full Name" >{{Auth::user()->name}}</td>
                  </tr>
                  <tr>
                    <td>Address </td>
                    <td data-title="Address" >{{@$detail->customerDetails->address}}</td>
                  </tr>
                  <tr>
                    <td>City</td>
                    <td data-title="City" >{{ucfirst(@$detail->customerDetails->city)}}</td>
                  </tr>
                  <tr>
                    <td>State/Province/Region</td>
                    <td data-title="State/Region" >{{ucfirst(@$detail->customerDetails->state)}}</td>
                  </tr>
                  <tr>
                    <td>Country</td>
                    <td data-title="Country">{{ucfirst(@$detail->customerDetails->country)}}</td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td data-title="Phone" >{{@$detail->customerDetails->phone}}</td>
                  </tr>
                  @if(isset($detail->customerDetails->additional_phone))
                  <tr>
                    <td>Additional Phone</td>
                    <td data-title="Additional Phone" >{{@$detail->customerDetails->additional_phone}}</td>
                  </tr>
                  @endif
                </table>
              </div>

              <div class="col-xs-12 col-md-6 col-sm-6">
                <div class="page-title">
                    <h2>Ship To</h2>
                </div>
         
                <table class="table table-bordered cart_summary" style="border-left: 1px solid silver;">
                <tr>
                    <td>E-Mail</td>
                    <td data-title="Full Name" >{{Auth::user()->email}}</td>
                  </tr>
                  <tr>
                    <td>Full Name</td>
                    <td data-title="Full Name" >{{Auth::user()->name}}</td>
                  </tr>
                  
                  <tr>
                    <td>Address </td>
                    <td data-title="Address" >@if(isset($detail->customerDetails->shipping_address)) {{@$detail->customerDetails->shipping_address}} @else {{@$detail->customerDetails->address}} @endif</td>
                  </tr>
                  <tr>
                    <td>City</td>
                    <td data-title="City" >@if(isset($detail->customerDetails->shipping_city)) {{ucfirst(@$detail->customerDetails->shipping_city)}} @else {{ucfirst(@$detail->customerDetails->city)}} @endif</td>
                  </tr>
                  <tr>
                    <td>State/Province/Region</td>
                    <td data-title="State/Region" >@if(isset($detail->customerDetails->shipping_state)) {{ucfirst(@$detail->customerDetails->shipping_state)}}@else {{ucfirst(@$detail->customerDetails->state)}} @endif</td>
                  </tr>
                  <tr>
                    <td>Country</td>
                    <td data-title="Country" >@if(isset($detail->customerDetails->shipping_country)) {{ucfirst(@$detail->customerDetails->shipping_country)}}@else {{ucfirst(@$detail->customerDetails->country)}} @endif</td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td data-title="Phone" >{{@$detail->customerDetails->phone}}</td>
                  </tr>
                  @if(isset($detail->customerDetails->additional_phone))
                  <tr>
                    <td>Additional Phone</td>
                    <td data-title="Additional Phone" >{{@$detail->customerDetails->additional_phone}}</td>
                  </tr>
                  @endif
                </table>
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
                <!-- <li><a>Account Dashboard</a></li> -->
                <li><a href="{{route('wishlist')}}">My Wishlist</a></li>
                <li><a href="{{route('shopping-cart')}}">My Cart</a></li>
                <li class="current last"><a href="{{route('orders-list')}}">My Orders</a></li>
              </ul>
            </div>
          </div>
          
        </aside>
      </div>
    </div>
  </section>

@endsection