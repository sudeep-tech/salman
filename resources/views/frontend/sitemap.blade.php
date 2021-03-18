@extends('layouts.index')
@section('main-content')

<!-- Breadcrumbs -->
  
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('fronthome')}}">Home</a><span>&raquo;</span></li>
            <li><strong>Sitemap </strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Sitemap  -->
  <section class="container">
    
    <div class="sitemap-page"><div class="page-title">
      <h2>Sitemap</h2>
    </div>
      <div class="col-xs-6 col-sm-3 col-md-4">
        <ul class="simple-list arrow-list bold-list">
          <li> <a href="#">Woman</a>
            <ul>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Accessories</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Cocktail </a> </li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Day </a> </li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Evening </a> </li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Sundresses </a> </li>
              <li><a href="#"><i class="fa fa-angle-double-right">&nbsp;</i>New arrivals</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right">&nbsp;</i>Bestsellers</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right">&nbsp;</i>Footwear Womens</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right">&nbsp;</i>Shorts</a></li>
            </ul>
          </li>
          <li> <a href="#">Man</a>
            <ul>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Polo Shirts</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Shirts</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Big &amp; Tall</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Jeans</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Sweaters</a></li>
            </ul>
          </li>
          <li><a href="#">Footwear</a></li>
          <li><a href="#">Accessories</a></li>
          <li><a href="#">Sale</a></li>
        </ul>
      </div>
      <div class="col-xs-6 col-sm-3 col-md-4">
        <ul class="simple-list arrow-list bold-list">
          <li><a href="#">Shopping Cart</a></li>
          <li> <a href="#">My Account</a>
            <ul>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>My Account</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Order history</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Advanced search</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Reviews</a></li>
            </ul>
          </li>
          <li> <a href="#">Categories</a>
            <ul>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Women</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Men</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Electronics</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Clothing</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Lookbook</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Accessories</a></li>
            </ul>
          </li>
          <li> <a href="#">Information</a>
            <ul>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Terms & Condition</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>FAQs</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Privacy Policy</a></li>
              <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-right">&nbsp;</i>Sitemap</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4"> <img class="img-responsive animate scale" src="frontend/images/large-icon-sitemap.png" alt="Aafnaideal Sitemap"> </div>
    </div>
  </section>
  <!-- //end Sitemap  -->

@endsection