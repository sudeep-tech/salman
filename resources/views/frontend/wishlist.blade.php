@extends('layouts.index')
@section('main-content')
<!-- Breadcrumbs -->
  
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul>
          <li class="home"> <a title="Go to Home Page" href="{{route('fronthome')}}">Home</a><span>&raquo;</span></li>
          <li><strong>Wishlist</strong></li>
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
        <div class="col-main col-sm-10 col-md-10 col-xs-12">
          <div class="my-account">
            <div class="page-title">
              <h2>My Wishlist</h2>
            </div>
          
            <div class="wishlist-item table-responsive">
              <table class="table-responsive-sm table-condensed">
                <thead>
                  <tr>
                    <th class="th-delate">Remove</th>
                    <th class="th-product">Images</th>
                    <th class="th-details">Product Name</th>
                    <th class="th-price">Retail Price</th>
                    <th class="th-price">Wholesale Price</th>
                    <th class="th-total th-add-to-cart">Add to Cart </th>
                  </tr>
                </thead>
                <tbody>
                    @if(isset($wishlist_data))
                    @if(is_array($wishlist_data) || is_object($wishlist_data))
                        @foreach($wishlist_data as $ind_wishlist_data)
                   
                  <tr>
                    <td class="th-delate"><a href="{{route('remove-wishlist-item')}}?item_id={{$ind_wishlist_data->item_id}}"><i class='fa fa-trash'></i></a></td>
                    <td class="th-product"><a href="#"><img src="{{asset('uploads/product/'.@$ind_wishlist_data->item->thumb)}}" width="50px"  alt="cart"></a></td>
                    <td class="th-details"><h2><a href="#">{{@$ind_wishlist_data->item->title}}</a></h2></td>
                    <td class="th-price text-center">@if(isset($ind_wishlist_data->item->price)) Nrs. {{number_format($ind_wishlist_data->item->price)}} @else - @endif</td>
                    <td class="th-price text-center">@if(isset($ind_wishlist_data->item->wholesale_price)) Nrs. {{number_format($ind_wishlist_data->item->wholesale_price).'/per '.@$ind_wishlist_data->item->product_quantity_name }} @else - @endif</td>
                    <td class="td-add-to-cart" >
                   
                     <button type='button' onclick="btnAddCart( {{@$ind_wishlist_data->item_id}} )" class="btn btn-primary btn-success" style="border:none; box-shadow:0px 1px 0px 1px blue;"><span> Add to Cart</span></button>
</td>
                   
                  </tr>
                
                    @endforeach
                    @endif
                    @endif
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <aside class="right sidebar col-sm-2 col-md-2 col-xs-12">
          <div class="sidebar-account block">
              <div class="sidebar-bar-title">
              <h3>My Account</h3>
              </div>
              <div class="block-content">
              <ul>
                  <li ><a>Account Dashboard</a></li>
              
                  <li ><a href="{{route('customer-address-book')}}">Address Book</a></li>
                  <li><a href="{{route('orders-list')}}">My Orders</a></li>
                  <li><a href="#">Billing Agreements</a></li>
              
                  <li><a href="#">My Product Reviews</a></li>
                  
                  <li class="current"><a href="{{route('wishlist')}}">My Wishlist</a></li>
                  <li><a href="{{route('shopping-cart')}}">My Cart</a></li>
                  <!-- <li class="last"><a href="#">Newsletter Subscriptions</a></li> -->
              </ul>
              </div>
          </div> 
        </aside>
      </div>
    </div>
  </section>

@endsection