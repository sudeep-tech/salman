@extends('layouts.index')
@section('main-content')
    <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('fronthome')}}">Home</a><span>&raquo;</span></li>
            <li><strong>{{@$_title}}</strong></li>
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
              <h2>{{@$_title}}</h2>
            </div>
            
            <div class="manufacturers-box">
              <div class="row">
                @if(isset($company_data[0]))
                @foreach($company_data as $ind_company_data)
                <figure class="col-lg-3 col-md-3 col-sm-3 col-xs-6"> <a href="{{route('shop-fronthome',@$ind_company_data->slug)}}" class="jtv-m-logo-img">
                    @if(isset($ind_company_data->company_logo)) 
                        <img src="{{asset('uploads/company-docs/company-logos/'.@$ind_company_data->company_logo)}}" alt="{{@$ind_company_data->company_name}}"  height='100px;' >
                    @else
                        @if(isset($ind_company_data->user->image))
                        <img src="{{asset('uploads/user/'.@$ind_company_data->user->image)}}" alt="{{@$ind_company_data->company_name}}"  height='100px;'>
                        @endif
                    @endif
                 </a>
                  <figcaption>
                    <h5><a href="{{route('shop-fronthome',@$ind_company_data->slug)}}">{{@$ind_company_data->company_name}}</a></h5>
                  </figcaption>
                </figure>
                @endforeach
                @endif
               
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
                  <li><a href="{{route('orders-list')}}">My Orders</a></li>
                  <!-- <li><a href="#">Billing Agreements</a></li> -->
              
                  <!-- <li><a href="#">My Product Reviews</a></li> -->
                  
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