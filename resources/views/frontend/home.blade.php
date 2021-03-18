@extends('layouts.index')
@section('main-content')
  <!-- Slideshow  -->

	<div class="main-slider" id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 banner-left hidden-xs">
          <!-- <img src="{{asset('frontend/images/banner-left.jpg') }}" alt="banner"> -->
        </div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
          <div id="jtv-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                <ul>
                @if(isset($banner))
                  @forelse($banner as $ind_banner)
                  
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><a href="{{@$ind_banner->link}}"><img src="{{ asset('uploads/banner/'.$ind_banner->image) }}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/></a>
                    <!-- <div class="caption-inner">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='250'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>{{@$ind_banner->title}}</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='200'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#fff; text-shadow:none; float:right;'>Awesome Deals</div>
                      <div class='tp-caption' data-x='310'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#f8f8f8;'>Perfect Place For You to Buy Products</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='370'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href="{{@$ind_banner->link}}" class="buy-btn">Get Started</a> </div>
                    </div> -->
                  </li>
                  @empty
                    
                  @endforelse
                  @endif
                  <!-- <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{asset('frontend/images/slider/slide-2.jpg') }}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner left">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='50'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Smooth, Rich & Loud Audio</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='50'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>headphone</div>
                      <div class='tp-caption' data-x='72'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>World's Most advanced Wireless earbuds.</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='72'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">EXPLORE NOW</a> </div>
                    </div>
                  </li>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{asset('frontend/images/slider/slide-3.jpg') }}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner left">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='350'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>It’s Time To Look</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='185'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Standard</div>
                      <div class='tp-caption' data-x='375'  data-y='245'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New Standard. under favorable smartwatches</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='375'  data-y='290'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Start Buying </a> </div>
                    </div>
                  </li> -->
                </ul>
                <div class="tp-bannertimer"></div>
              </div>
            </div>
          </div>
        </div>
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
                <h3>Total Visitors Count</h3><br>
				 <!-- Default Statcounter code for Aafnai Deal http://aafnaideal.com -->
				 <script type="text/javascript">
					var sc_project=12130127; 
					var sc_invisible=0; 
					var sc_security="0e80848c"; 
					var sc_https=1; 
					var scJsHost = "https://";
					document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+
					"statcounter.com/counter/counter.js'></"+"script>");
				</script>
				<noscript><div class="statcounter" style='background:none;'><a title="Web Analytics"
				href="https://statcounter.com/" target="_blank" style='background:none;'><img class="statcounter" style='background:none;'
				src="https://c.statcounter.com/12130127/0/0e80848c/0/" alt="Web
					Analytics"></a> </div></noscript>
				<!-- End of Statcounter Code -->
               
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12 ">
          <div class="block-wrapper return">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
              <div class="service-wrapper">
                <h3>100% secure payments</h3>
                <p>Credit/ Debit Card/Banking </p>
              </div>
            </div>
          </div>
        </div>
		<div class="col col-md-3 col-sm-6 col-xs-12">
		  <div class="block-wrapper user">
			<div class="text-des">
			  <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
			  <div class="service-wrapper">
				<h5>Wholesale & Retail Price</h5>
				<p style='font-size:11px;'>Best Deals on Wholesale & Retail</p>
			  </div>
			</div>
		  </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper support">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
              <div class="service-wrapper">
                <h3>Support 24/7/365 days</h3>
                <p>Call us: +977 9810255916</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="inner-box">
    <div class="container">
      <div class="row"> 
        <!-- Banner -->
        <div class="col-md-3 top-banner hidden-sm">
          <div class="jtv-banner3">
            <div class="jtv-banner3-inner"><a href="#"><img src="{{asset('frontend/images/sub1.jpg') }}" alt="Aafnai Deal"></a>
              <div class="hover_content">
                <div class="hover_data">
                  <div class="title"> Big Sale </div>
                  <div class="desc-text">Up to 55% off</div>
                  <span>Camera, Laptop & Mobile</span>
                  <p><a href="" class="shop-now">Get it now!</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Featured products -->
        <div class="col-sm-12 col-md-9 jtv-best-sale special-pro">
          <div class="jtv-best-sale-list">
            <div class="wpb_wrapper">
              <div class="best-title text-left">
                <h2>Featured Products</h2>
              </div>
            </div>
            <div class="slider-items-products">
              <div id="jtv-best-sale-slider" class="product-flexslider">
                <div class="slider-items">
				          @if(isset($featured_products))
				            @forelse($featured_products as $ind_featured_product)
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <!-- <div class="icon-sale-label sale-left">Sale</div> -->
                        <!-- <div class="icon-new-label new-left">New</div> -->
                        <div class="pr-img-area"> <a title="{{$ind_featured_product->title}}" href="{{route('product-detail',$ind_featured_product->slug)}}">
                          @php
                          if(isset($ind_featured_product->product_images)){
                          $product_images=$ind_featured_product->product_images;
                          $another_image=@$product_images[0]->image_name;
                          }
                          @endphp
                          <figure> <img class="first-img img" height="180px" width="100px" src="@if(isset($ind_featured_product->thumb)) {{asset('uploads/product/'.@$ind_featured_product->thumb)}} @else {{ asset('uploads/product/default.png') }}  @endif" alt="{{$ind_featured_product->title}}">@if(isset($another_image) && !empty(@$another_image)) <img class="hover-img" height="180px" width="100px" src="{{ asset('uploads/product/'.@$another_image) }}" alt="{{@$ind_featured_product->title}}">@endif</figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist">
                                <a href="{{route('post-wishlist')}}?item_id={{$ind_featured_product->id}}"> <i class="fa fa-heart-o"></i> </a> 
                            </div>
                            <!-- <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div> -->
                            <div class="mt-button quick-view"> <a href="{{route('quickview')}}?slug={{$ind_featured_product->slug}}"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{$ind_featured_product->title}}" href="{{route('quickview')}}?slug={{$ind_featured_product->slug}}">{{@$ind_featured_product->title}} </a> </div>
                          <div class="item-content">
                            
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_featured_product->price)) {{number_format($ind_featured_product->price)}} @else {{number_format(@$ind_featured_product->wholesale_price).'/'.@$ind_featured_product->product_quantity_name}} @endif </span> </span> </div>
                            </div>
                            <div class="rating" style="color:gold;"> 
                              @php $product_average_rating=@$ind_featured_product->product_average_rating->avg('average_rate'); @endphp
                             @if(isset($product_average_rating) && !empty($product_average_rating))
                             
                              @php
                                $whole = floor($product_average_rating);      
                                $fraction = $product_average_rating - $whole;   
                              @endphp

                              @for($i=1;$i<=$product_average_rating;$i++)<i class="fa fa-star"></i>
                                @if($i==$whole) @if(isset($fraction) && !empty(@$fraction)) <i class='fa fa-star-half-o'></i> @endif @endif 
                              @endfor
                              @for($i=1;$i<=(5-$product_average_rating);$i++) 
                                <i class="fa fa-star-o"></i>
                              @endfor
                             @else
							  	@for($i=1;$i<=3;$i++)<i class="fa fa-star"></i>@endfor
                                @for($i=1;$i<=2;$i++)<i class="fa fa-star-o"></i>@endfor
                            @endif
                            </div>
                            <div class="pro-action">
                             
                                <button  type="button" onclick="btnAddCart( {{@$ind_featured_product->id}} )" class="add-to-cart"><span> Add to Cart</span> </button>
                             
              
                              <!-- <button type="button" class="add-to-cart" onclick="btnAddCart( {{@$ind_featured_product->id}} )"><span> Add to Cart</span> </button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
				          </div>
				            @empty
				          <div class="product-item">
                    <div class="item-inner">
                      <h4 class='text-center'>No Featured Product at a Moment!</h4>
                    </div>
                  </div>
                    @endforelse
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="inner-box">
    <div class='container'>
      <div class="row">
           <!-- Featured products -->
           <div class="col-md-3 top-banner hidden-sm">
            <div class="jtv-banner3">
              <div class="jtv-banner3-inner"><a href="#"><img src="{{asset('frontend/images/sub2.jpg') }}" alt="Aafnai Deal"></a>
                <!-- <div class="hover_content">
                  <div class="hover_data">
                    <div class="title"> Big Sale </div>
                    <div class="desc-text">Up to 55% off</div>
                    <span>Camera, Laptop & Mobile</span>
                    <p><a href="" class="shop-now">Get it now!</a></p>
                  </div>
                </div> -->
              </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-9 jtv-best-sale special-pro">
          <div class="jtv-best-sale-list">
            <div class="wpb_wrapper">
              <div class="best-title text-left">
                <h2>Top Rate Products</h2>
              </div>
            </div>
            <div class="slider-items-products">
              <div id="jtv-best-sale-slider" class="product-flexslider">
                <div class="slider-items">
				          @if(isset($top_rate_products))
				            @forelse($top_rate_products as $ind_top_rate_product)
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <!-- <div class="icon-sale-label sale-left">Sale</div> -->
                        <!-- <div class="icon-new-label new-left">New</div> -->
                        <div class="pr-img-area"> <a title="{{$ind_top_rate_product->title}}" href="{{route('product-detail',$ind_top_rate_product->slug)}}">
                          @php
                          if(isset($ind_top_rate_product->product_images)){
                          $product_images=$ind_top_rate_product->product_images;
                          $another_image=@$product_images[0]->image_name;
                          }
                          @endphp
                          <figure> <img class="first-img img" height="180px" width="100px" src="@if(isset($ind_top_rate_product->thumb)) {{asset('uploads/product/'.@$ind_top_rate_product->thumb)}} @else {{ asset('uploads/product/default.png') }}  @endif" alt="{{$ind_top_rate_product->title}}">@if(isset($another_image) && !empty(@$another_image)) <img class="hover-img" height="180px" width="100px" src="{{ asset('uploads/product/'.@$another_image) }}" alt="{{@$ind_top_rate_product->title}}">@endif</figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist">
                                <a href="{{route('post-wishlist')}}?item_id={{$ind_top_rate_product->id}}"> <i class="fa fa-heart-o"></i> </a> 
                            </div>
                            <!-- <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div> -->
                            <div class="mt-button quick-view"> <a href="{{route('quickview')}}?slug={{$ind_top_rate_product->slug}}"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{$ind_top_rate_product->title}}" href="{{route('quickview')}}?slug={{$ind_top_rate_product->slug}}">{{@$ind_top_rate_product->title}} </a> </div>
                          <div class="item-content">
                            
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_top_rate_product->price)) {{number_format($ind_top_rate_product->price)}} @else {{number_format(@$ind_top_rate_product->wholesale_price).'/'.@$ind_top_rate_product->product_quantity_name}} @endif </span> </span> </div>
                            </div>
                            <div class="rating" style="color:gold;"> 
                              @php $product_average_rating=@$ind_top_rate_product->product_average_rating->avg('average_rate'); @endphp
                             @if(isset($product_average_rating) && !empty($product_average_rating))
                             
                              @php
                                $whole = floor($product_average_rating);      
                                $fraction = $product_average_rating - $whole;   
                              @endphp

                              @for($i=1;$i<=$product_average_rating;$i++)<i class="fa fa-star"></i>
                                @if($i==$whole) @if(isset($fraction) && !empty(@$fraction)) <i class='fa fa-star-half-o'></i> @endif @endif 
                              @endfor
                              @for($i=1;$i<=(5-$product_average_rating);$i++) 
                                <i class="fa fa-star-o"></i>
                              @endfor
                             @else
							  	@for($i=1;$i<=3;$i++)<i class="fa fa-star"></i>@endfor
                                @for($i=1;$i<=2;$i++)<i class="fa fa-star-o"></i>@endfor
                            @endif
                            </div>
                            <div class="pro-action">
                             
                                <button  type="button" onclick="btnAddCart( {{@$ind_top_rate_product->id}} )" class="add-to-cart"><span> Add to Cart</span> </button>
                             
              
                              <!-- <button type="button" class="add-to-cart" onclick="btnAddCart( {{@$ind_top_rate_product->id}} )"><span> Add to Cart</span> </button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
				          </div>
				            @empty
				          <div class="product-item">
                    <div class="item-inner">
                      <h4 class='text-center'>No Top Rate Products at a Moment!</h4>
                    </div>
                  </div>
                    @endforelse
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  
  
  <!-- All products-->
  
  <div class="container">
    <div class="home-tab">
      <div class="tab-title text-left">
        <h2>Best selling</h2> 
         <ul class="nav home-nav-tabs home-product-tabs">
          <li class="active"><a href="#smartphones" data-toggle="tab" aria-expanded="false">Smartphones</a></li>
          <li ><a href="#vegetables" data-toggle="tab" aria-expanded="false">Vegetables And Fruits</a></li>
          <li><a href="#mens_fashion" data-toggle="tab" aria-expanded="false">Men's Fashion</a></li>
          <li><a href="#womens_fashion" data-toggle="tab" aria-expanded="false">Women's Fashion</a></li>
        </ul>
      </div>
     
      <div id="productTabContent" class="tab-content">
        <div class="tab-pane in active " id="smartphones">
          <div class="featured-pro">
            <div class="slider-items-products">
              <div id="smartphone-slider" class="product-flexslider hidden-buttons" >
                <div class="slider-items slider-width-col4">
                  @if(isset($smartphones))
                  @forelse($smartphones as $ind_smartphones)
                  <div class="product-item" style="box-shadow:1px 1px 1px 0px silver;">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        
                        <!-- <div class="icon-new-label new-left">New</div> -->
                        <div class="pr-img-area"> <a title="{{@$ind_smartphones->title}}" href="{{route('product-detail',$ind_smartphones->slug)}}">
                        @php
                          $another_image=null;
                          if(isset($ind_smartphones->product_images)){
                          $product_images=$ind_smartphones->product_images;
                          $another_image=@$product_images[0]->image_name;
                          }
                          @endphp
                          <figure> <img class="first-img" height="200px"  src="{{ asset('uploads/product/'.@$ind_smartphones->thumb) }}" alt="{{@$ind_smartphones->title}}" > @if(isset($another_image) && !empty(@$another_image)) <img class="hover-img" height="200px" src="{{ asset('uploads/product/'.@$another_image) }}" alt="{{@$ind_featured_product->title}}">@endif </figure>
                          </a> 
                        </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                             <div class="mt-button add_to_wishlist"> <a href="{{route('post-wishlist')}}?item_id={{@$ind_smartphones->id}}"> <i class="fa fa-heart-o"></i> </a> </div>
                            <!-- <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>  -->
                            <div class="mt-button quick-view"> <a href="{{route('quickview')}}?slug={{@$ind_smartphones->slug}}"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{@$ind_smartphones->title}}" style="font-size:13px; font-family:arial;" href="{{route('quickview')}}?slug={{@$ind_smartphones->slug}}">{{@$ind_smartphones->title}} </a> </div>
                          <div class="item-content">
                          
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_smartphones->price)) {{number_format(@$ind_smartphones->price)}} @else {{number_format(@$ind_smartphones->wholesale_price).'/'.@$ind_smartphones->product_quantity_name}} @endif</span> </span> </div>
                            </div>
                            <div class="rating" style="color:gold;"> 
                              @php $product_average_rating=@$ind_smartphones->product_average_rating->avg('average_rate'); @endphp
                             @if(isset($product_average_rating) && !empty($product_average_rating))
                             
                              @php
                                $whole = floor($product_average_rating);      
                                $fraction = $product_average_rating - $whole;   
                              @endphp

                              @for($i=1;$i<=$product_average_rating;$i++)<i class="fa fa-star"></i>
                                @if($i==$whole) @if(isset($fraction) && !empty(@$fraction)) <i class='fa fa-star-half-o'></i> @endif @endif 
                              @endfor
                              @for($i=1;$i<=(5-$product_average_rating);$i++) 
                                <i class="fa fa-star-o"></i>
                              @endfor
                             @else
							  	@for($i=1;$i<=3;$i++)<i class="fa fa-star"></i>@endfor
                                @for($i=1;$i<=2;$i++)<i class="fa fa-star-o"></i>@endfor
                            @endif
                            </div>
                            <div class="pro-action">
                                  <button  type="button" onclick="btnAddCart( {{@$ind_smartphones->id}} )" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @empty
                    <div class='container'>
                      <h4 class='text-center' style='color:red'>No Product Found At This Section!</h4>
                    </div>
                  @endforelse
                  @else
                    <div class="container" style="margin-bottom:50px; box-shadow:1px 1px 1px 0px blue;">
                      <h4 style="color:red;" class="text-center">No Proudct Under This Section!</h4>
                    </div>
                @endif
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane " id="vegetables">
          <div class="top-sellers-pro">
            <div class="slider-items-products">
              <div id="computer-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 ">
                  
                @if(isset($vegetables))
                  @forelse($vegetables as $ind_vegetable)
                  <div class="product-item" style="box-shadow:1px 1px 1px 0px silver;">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        
                        <!-- <div class="icon-new-label new-left">New</div> -->
                        <div class="pr-img-area"> <a title="{{@$ind_vegetable->title}}" href="{{route('product-detail',$ind_vegetable->slug)}}">
                        @php
                          $another_image=null;
                          if(isset($ind_vegetable->product_images)){
                          $product_images=$ind_vegetable->product_images;
                          $another_image=@$product_images[0]->image_name;
                          }
                          @endphp
                          <figure> <img class="first-img" height="200px" src="{{ asset('uploads/product/'.@$ind_vegetable->thumb) }}" alt="{{@$ind_vegetable->title}}"  height="200px"> @if(isset($another_image) && !empty(@$another_image)) <img class="hover-img"  height="200px" src="{{ asset('uploads/product/'.@$another_image) }}" alt="{{@$ind_featured_product->title}}">@endif </figure>
                          </a> 
                        </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                             <div class="mt-button add_to_wishlist"> <a href="{{route('post-wishlist')}}?item_id={{$ind_vegetable->id}}"> <i class="fa fa-heart-o"></i> </a> </div>
                            <!-- <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>  -->
                            <div class="mt-button quick-view"> <a href="{{route('quickview')}}?slug={{@$ind_vegetable->slug}}"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{@$ind_vegetable->title}}" style="font-size:13px; font-family:arial;" href="{{route('quickview')}}?slug={{@$ind_vegetable->slug}}">{{@$ind_vegetable->title}} </a> </div>
                          <div class="item-content">
                            
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_vegetable->price)) {{number_format($ind_vegetable->price)}} @else {{number_format(@$ind_vegetable->wholesale_price).'/'.@$ind_vegetable->product_quantity_name}} @endif</span> </span> </div>
                            </div>
                            <div class="rating" style="color:gold;"> 
                              @php $product_average_rating=@$ind_vegetable->product_average_rating->avg('average_rate'); @endphp
                             @if(isset($product_average_rating) && !empty($product_average_rating))
                             
                              @php
                                $whole = floor($product_average_rating);      
                                $fraction = $product_average_rating - $whole;   
                              @endphp

                              @for($i=1;$i<=$product_average_rating;$i++)<i class="fa fa-star"></i>
                                @if($i==$whole) @if(isset($fraction) && !empty(@$fraction)) <i class='fa fa-star-half-o'></i> @endif @endif 
                              @endfor
                              @for($i=1;$i<=(5-$product_average_rating);$i++) 
                                <i class="fa fa-star-o"></i>
                              @endfor
                             @else
							  	@for($i=1;$i<=3;$i++)<i class="fa fa-star"></i>@endfor
                                @for($i=1;$i<=2;$i++)<i class="fa fa-star-o"></i>@endfor
                            @endif
                            </div>
                            <div class="pro-action">
                              <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                  @csrf
                                  <input name="id" type="hidden" value="{{$ind_vegetable->id}}">
                                  <button  type="button" onclick="btnAddCart( {{@$ind_vegetable->id}} )" class="add-to-cart"><span> Add to Cart</span> </button>
                              </form>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @empty
                    <div class='container'>
                      <h4 class='text-center' style='color:red'>No Product Found At This Section!</h4>
                    </div>
                  @endforelse
                @else
                    <div class="container" style="margin-bottom:50px; box-shadow:1px 1px 1px 0px blue;">
                      <h4 style="color:red;" class="text-center">No Proudct Under This Section!</h4>
                    </div>
                @endif
                  
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="mens_fashion">
          <div class="top-sellers-pro">
            <div class="slider-items-products">
              <div id="watches-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 ">

                @if(isset($mens_fashion))
                  @forelse($mens_fashion as $ind_mens_fashion)
                  <div class="product-item" style="box-shadow:1px 1px 1px 0px silver;">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        
                        <!-- <div class="icon-new-label new-left">New</div> -->
                        <div class="pr-img-area"> <a title="{{@$ind_mens_fashion->title}}" href="{{route('product-detail',$ind_mens_fashion->slug)}}">
                        @php
                          $another_image=null;
                          if(isset($ind_mens_fashion->product_images)){
                          $product_images=$ind_mens_fashion->product_images;
                          $another_image=@$product_images[0]->image_name;
                          }
                          @endphp
                          <figure> <img class="first-img" height="200px"  src="{{ asset('uploads/product/'.@$ind_mens_fashion->thumb) }}" alt="{{@$ind_mens_fashion->title}}" > @if(isset($another_image) && !empty(@$another_image)) <img class="hover-img" height="200px" src="{{ asset('uploads/product/'.@$another_image) }}" alt="{{@$ind_featured_product->title}}">@endif </figure>
                          </a> 
                        </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                             <div class="mt-button add_to_wishlist"> <a href="{{route('post-wishlist')}}?item_id={{@$ind_mens_fashion->id}}"> <i class="fa fa-heart-o"></i> </a> </div>
                            <!-- <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>  -->
                            <div class="mt-button quick-view"> <a href="{{route('quickview')}}?slug={{@$ind_mens_fashion->slug}}"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{@$ind_mens_fashion->title}}" style="font-size:13px; font-family:arial;" href="{{route('quickview')}}?slug={{@$ind_mens_fashion->slug}}">{{@$ind_mens_fashion->title}} </a> </div>
                          <div class="item-content">
                            
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_mens_fashion->price)) {{number_format(@$ind_mens_fashion->price)}} @else {{number_format(@$ind_mens_fashion->wholesale_price).'/'.@$ind_mens_fashion->product_quantity_name}} @endif</span> </span> </div>
                            </div>
                            <div class="rating" style="color:gold;"> 
                              @php $product_average_rating=@$ind_mens_fashion->product_average_rating->avg('average_rate'); @endphp
                             @if(isset($product_average_rating) && !empty($product_average_rating))
                             
                              @php
                                $whole = floor($product_average_rating);      
                                $fraction = $product_average_rating - $whole;   
                              @endphp

                              @for($i=1;$i<=$product_average_rating;$i++)<i class="fa fa-star"></i>
                                @if($i==$whole) @if(isset($fraction) && !empty(@$fraction)) <i class='fa fa-star-half-o'></i> @endif @endif 
                              @endfor
                              @for($i=1;$i<=(5-$product_average_rating);$i++) 
                                <i class="fa fa-star-o"></i>
                              @endfor
                             @else
							  	@for($i=1;$i<=3;$i++)<i class="fa fa-star"></i>@endfor
                                @for($i=1;$i<=2;$i++)<i class="fa fa-star-o"></i>@endfor
                            @endif
                            </div>
                            <div class="pro-action">
                              <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                  @csrf
                                  <input name="id" type="hidden" value="{{$ind_mens_fashion->id}}">
                                  <button type="button" onclick="btnAddCart( {{@$ind_mens_fashion->id}} )" class="add-to-cart"><span> Add to Cart</span> </button>
                              </form>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @empty
                    <div class='container'>
                      <h4 class='text-center' style='color:red'>No Product Found At This Section!</h4>
                    </div>
                  @endforelse
                  @else
                    <div class="container" style="margin-bottom:50px; box-shadow:1px 1px 1px 0px blue;">
                      <h4 style="color:red;" class="text-center">No Proudct Under This Section!</h4>
                    </div>
                @endif
                 
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="womens_fashion">
          <div class="top-sellers-pro">
            <div class="slider-items-products">
              <div id="photo-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 ">

                @if(isset($womens_fashion))
                  @forelse($womens_fashion as $ind_womens_fashion)
                  <div class="product-item" style="box-shadow:1px 1px 1px 0px silver;">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        
                        <!-- <div class="icon-new-label new-left">New</div> -->
                        <div class="pr-img-area"> <a title="{{@$ind_womens_fashion->title}}" href="{{route('product-detail',$ind_womens_fashion->slug)}}">
                        @php
                          $another_image=null;
                          if(isset($ind_womens_fashion->product_images)){
                          $product_images=$ind_womens_fashion->product_images;
                          $another_image=@$product_images[0]->image_name;
                          }
                          @endphp
                          <figure> <img class="first-img" height="200px"  src="{{ asset('uploads/product/'.@$ind_womens_fashion->thumb) }}" alt="{{@$ind_womens_fashion->title}}" > @if(isset($another_image) && !empty(@$another_image)) <img class="hover-img" height="200px" src="{{ asset('uploads/product/'.@$another_image) }}" alt="{{@$ind_featured_product->title}}">@endif </figure>
                          </a> 
                        </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                             <div class="mt-button add_to_wishlist"> <a href=""> <i class="fa fa-heart-o"></i> </a> </div>
                            <!-- <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div>  -->
                            <div class="mt-button quick-view"> <a href=""> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{@$ind_womens_fashion->title}}" style="font-size:13px; font-family:arial;" href="{{route('quickview')}}?slug={{@$ind_womens_fashion->slug}}">{{@$ind_womens_fashion->title}} </a> </div>
                          <div class="item-content">
                            
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_womens_fashion->price)) {{number_format(@$ind_womens_fashion->price)}} @else {{number_format(@$ind_womens_fashion->wholesale_price).'/'.@$ind_womens_fashion->product_quantity_name}} @endif</span> </span> </div>
                            </div>
                            <div class="rating" style="color:gold;"> 
                              @php $product_average_rating=@$ind_womens_fashion->product_average_rating->avg('average_rate'); @endphp
                             @if(isset($product_average_rating) && !empty($product_average_rating))
                             
                              @php
                                $whole = floor($product_average_rating);      
                                $fraction = $product_average_rating - $whole;   
                              @endphp

                              @for($i=1;$i<=$product_average_rating;$i++)<i class="fa fa-star"></i>
                                @if($i==$whole) @if(isset($fraction) && !empty(@$fraction)) <i class='fa fa-star-half-o'></i> @endif @endif 
                              @endfor
                              @for($i=1;$i<=(5-$product_average_rating);$i++) 
                                <i class="fa fa-star-o"></i>
                              @endfor
                             @else
							  	@for($i=1;$i<=3;$i++)<i class="fa fa-star"></i>@endfor
                                @for($i=1;$i<=2;$i++)<i class="fa fa-star-o"></i>@endfor
                            @endif
                            </div>
                            <div class="pro-action">
                              <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                  @csrf
                                  <input name="id" type="hidden" value="{{$ind_womens_fashion->id}}">
                                  <button type="button" onclick="" class="add-to-cart"><span> Add to Cart</span> </button>
                              </form>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @empty
                    <div class='container'>
                      <h4 class='text-center' style='color:red'>No Product Found At This Section!</h4>
                    </div>
                  @endforelse
                  @else
                    <div class="container" style="margin-bottom:50px; box-shadow:1px 1px 1px 0px blue;">
                      <h4 style="color:red;" class="text-center">No Proudct Under This Section!</h4>
                    </div>
                @endif
                  

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
 

  <div class="container">
    <div class="row">
      <div class="daily-deal-section"> 
        <!-- daily deal section-->
        <div class="col-md-8 daily-deal">
          <h3 class="deal-title">DIPAWALI DEALS</h3>
          <div class="title-divider"><span></span></div>
          <h5>Grab Your Products For This Dipawali With Great Deals You Can't Find Anywhere. </h5>
          <h5 class="text-center" style="font-weight:900">तिहार मनाउँ रमेर, <strong style="color:royalblue; font-size:25px;">Aafnai Deal</strong> बाट सामान किनाै  मन खाेलेर ।</h5>
          
          <div class="hot-offer-text">Dipawali Sale <span>2019</span></div>
          <div class="box-timer"> <span class="des-hot-deal">Hurry up! Special offer</span>
            <div class="time" data-countdown="countdown" data-date="10-29-2019-23-59-59"></div>
            <a href="" class="link">Shop Now</a> </div>
        </div>
        @if(isset($featured_products))
        <div class="col-md-4 hot-pr-img-area">
          <div id="daily-deal-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 ">
              @foreach($featured_products as $ind_featured_product)
              
              <div class="pr-img-area">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <a title="{{@$ind_featured_product->title}}" href="{{route('product-detail',$ind_featured_product->slug)}}">
                      <figure> <img class="first-img" height="400px" src="{{asset('uploads/product/'.@$ind_featured_product->thumb) }}"  alt="{{@$ind_featured_product->title}}"></figure>
                    </a>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 text-center" style="background:turquoise; word-wrap:break-word; overflow:auto;">
                    <div class="price-box"> <span class="regular-price"> <span class="price" >Nrs. @if(isset($ind_featured_product->price)) {{number_format(@$ind_featured_product->price)}} @else {{number_format(@$ind_featured_product->wholesale_price).'/'.@$ind_featured_product->product_quantity_name}} @endif</span> </span> 
                    </div>
                    <div class="item-title"> <a title="{{@$ind_featured_product->title}}" style="font-size:13px; font-family:arial;" href="{{route('quickview')}}?slug={{@$ind_featured_product->slug}}">{{@$ind_featured_product->title}} </a> </div>
                  </div>
                </div>
              </div>
                @endforeach

            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="banner-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <figure> <a href="" target="_self" class="image-wrapper"><img src="{{asset('frontend/images/banner-laptop.jpg') }}" alt="banner laptop"></a></figure>
        </div>
        <div class="col-sm-6">
          <figure> <a href="" target="_self" class="image-wrapper"><img src="{{asset('frontend/images/banner-mob.jpg') }}" alt="banner moblie"></a></figure>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="inner-box">
    <div class='container'>
      <div class="row">
           <!-- Featured products -->
        <div class="col-sm-12 col-md-12 jtv-best-sale special-pro">
          <div class="jtv-best-sale-list">
            <div class="wpb_wrapper">
              <div class="best-title text-left">
                <h2>New Arrivals</h2>
              </div>
            </div>
            
            <div class="slider-items-products">
              <div id="jtv-best-sale-slider" class="product-flexslider">
                <div class="slider-items">
				          @if(isset($latest_products))
				            @forelse($latest_products as $ind_latest_product)
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <!-- <div class="icon-sale-label sale-left">Sale</div> -->
                        <div class="icon-new-label new-left">New</div>
                        <div class="pr-img-area"> <a title="{{$ind_latest_product->title}}" href="{{route('product-detail',$ind_latest_product->slug)}}">
                          @php
                          if(isset($ind_latest_product->product_images)){
                          $product_images=$ind_latest_product->product_images;
                          $another_image=@$product_images[0]->image_name;
                          }
                          @endphp
                          <figure> <img class="first-img img" height="180px" src="@if(isset($ind_latest_product->thumb)) {{asset('uploads/product/'.@$ind_latest_product->thumb)}} @else {{ asset('uploads/product/default.png') }}  @endif" alt="{{$ind_latest_product->title}}">@if(isset($another_image) && !empty(@$another_image)) <img class="hover-img" height="180px" src="{{ asset('uploads/product/'.@$another_image) }}" alt="{{@$ind_latest_product->title}}">@endif</figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist">
                              
                                <a href="{{route('post-wishlist')}}?item_id={{$ind_latest_product->id}}"> <i class="fa fa-heart-o"></i> </a> 
                            </div>
                            <!-- <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div> -->
                            <div class="mt-button quick-view"> <a href="{{route('quickview')}}?slug={{$ind_latest_product->slug}}"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{$ind_latest_product->title}}" href="{{route('quickview')}}?slug={{$ind_latest_product->slug}}">{{@$ind_latest_product->title}} </a> </div>
                          <div >Saler: <a title="{{$ind_latest_product->company_data->company_name}}" href="">{{@$ind_latest_product->company_data->company_name}} </a> </div>
                          <div ><address>{{@$ind_latest_product->company_data->sales_section_phone}}</address> </div>
                          <div class="item-content">
                            
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_latest_product->price)) {{number_format($ind_latest_product->price)}} @else {{number_format(@$ind_latest_product->wholesale_price).'/'.@$ind_latest_product->product_quantity_name}} @endif </span> </span> </div>
                            </div>
                            <div class="rating" style="color:gold;"> 
                              @php $product_average_rating=@$ind_latest_product->product_average_rating->avg('average_rate'); @endphp
                             @if(isset($product_average_rating) && !empty($product_average_rating))
                             
                              @php
                                $whole = floor($product_average_rating);      
                                $fraction = $product_average_rating - $whole;   
                              @endphp

                              @for($i=1;$i<=$product_average_rating;$i++)<i class="fa fa-star"></i>
                                @if($i==$whole) @if(isset($fraction) && !empty(@$fraction)) <i class='fa fa-star-half-o'></i> @endif @endif 
                              @endfor
                              @for($i=1;$i<=(5-$product_average_rating);$i++) 
                                <i class="fa fa-star-o"></i>
                              @endfor
                             @else
							  	              @for($i=1;$i<=3;$i++)<i class="fa fa-star"></i>@endfor
                                @for($i=1;$i<=2;$i++)<i class="fa fa-star-o"></i>@endfor
                            @endif
                            </div>
                            <div class="pro-action">
                              <!-- <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                @csrf -->
                                <!-- <input name="id" type="hidden" value="{{$ind_latest_product->id}}"> -->
                                <button type="button" onclick="btnAddCart( {{@$ind_latest_product->id}} )" class="add-to-cart"><span> Add to Cart</span> </button>
                              <!-- </form> -->
              
                              <!-- <button type="button" class="add-to-cart" onclick="btnAddCart( {{@$ind_latest_product->id}} )"><span> Add to Cart</span> </button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
				          </div>
				            @empty
				          <div class="product-item">
                    <div class="item-inner">
                      <h4 class='text-center'>No Latest Products at a Moment!</h4>
                    </div>
                  </div>
                    @endforelse
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @if(isset($level_one_categories))
<br>
  <section class="banner-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left:5px; margin-right:5px; padding:0px !important;">
        <div class="wpb_wrapper">
              <div class=" text-center">
                <h4>Shop By Category</h4>
                <div class="title-divider"><span></span></div>
              </div>
            </div>
          <!-- <h3 class="text-center">Find Products By Categories</h3> -->
        </div>
       
        @foreach($level_one_categories as $ind_level_one_category)
        <div class="col-xs-12 col-sm-3 col-lg-3 col-md-3">
          @php
        
          $category_image=(isset($ind_level_one_category->image))?$ind_level_one_category->image : "product-default.jpg";
          
          @endphp
          <div class="banner-block"> <a href="one_category->slug)}}"> <img src="{{asset('uploads/category/'.@$category_image) }}" height="180px" alt="{{@$ind_level_one_category->title}}"> </a>
            <div class="text-des-container">
              <div class="text-des">
                <h2>{{@$ind_level_one_category->title}}</h2>
                <!-- <p>For the littlest people</p> -->
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
        
      </div>
    </div>
  </section>
@endif


  <!-- Blog -->
  <section class="blog-post-wrapper">
    <div class="container">
      <div class="best-title text-left">
        <h2>Latest Blogs</h2>
      </div>
      <div class="slider-items-products">
        <div id="latest-news-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6">
            <div class="item">
              <div class="blog-box"> <a href="#"> <img class="primary-img" src="{{asset('frontend/images/blog-img1.jpg') }}" alt="HTML template"></a>
                <div class="blog-btm-desc">
                  <div class="blog-top-desc">
                    <div class="blog-date"> 28 Sep 2019 </div>
                    <h4><a href="#">Lorem ipsum dolor sit</a></h4>
                    <div class="jtv-entry-meta"> <i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>15 Comments</strong></a></div>
                  </div>
                  <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, Mauris fermentum dictum.</p>
                  <a class="read-more" href="#"> Read More</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-box"> <a href="#"> <img class="primary-img" src="{{asset('frontend/images/blog-img2.jpg') }}" alt="HTML template"></a>
                <div class="blog-btm-desc">
                  <div class="blog-top-desc">
                    <div class="blog-date"> 18 Sep 2019 </div>
                    <h4><a href="#">Sed do eiusmod sit amet</a></h4>
                    <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>50 Comments</strong></a></div>
                  </div>
                  <p> Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                  <a class="read-more" href="#"> Read More</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-box"> <a href="#"> <img class="primary-img" src="{{asset('frontend/images/blog-img3.jpg') }}" alt="HTML template"></a>
                <div class="blog-btm-desc">
                  <div class="blog-top-desc">
                    <div class="blog-date"> 5 Sep 2019 </div>
                    <h4><a href="#">Integer scelerisque diam</a></h4>
                    <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>25 Comments</strong></a></div>
                  </div>
                  <p> Doloremque nam. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna.</p>
                  <a class="read-more" href="#"> Read More</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-box"> <a href="#"> <img class="primary-img" src="{{asset('frontend/images/blog-img4.jpg') }}" alt="HTML template"></a>
                <div class="blog-btm-desc">
                  <div class="blog-top-desc">
                    <div class="blog-date"> 25 July 2019 </div>
                    <h4><a href="#">Integer scelerisque diam</a></h4>
                    <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>05 Comments</strong></a></div>
                  </div>
                  <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna. Aliquam erat volutpat. </p>
                  <a class="read-more" href="#"> Read More</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-box"> <a href="#"> <img class="primary-img" src="{{asset('frontend/images/blog-img5.jpg') }}" alt="HTML template"></a>
                <div class="blog-btm-desc">
                  <div class="blog-top-desc">
                    <div class="blog-date"> 06 July 2019 </div>
                    <h4><a href="#">Duis ac turpis aliquam leo</a></h4>
                    <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="#"><i class="fa fa-commenting-o"></i> <strong>25 Comments</strong></a></div>
                  </div>
                  <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna. Aliquam erat volutpat.</p>
                  <a class="read-more" href="#"> Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- our clients Slider -->
  @if(isset($results_array) && !empty(@$results_array))
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="container">
          <h4 class="text-center">Our Top Clients</h4>
        </div>
      </div>
      <div class="col-md-12 col-xs-12">
        <div class="our-clients">
          <div class="slider-items-products">
            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col6">
                @for($i=1;$i<count($results_array);$i++)
                  <div class="item"><img src="{{asset('landing/img/clients-logo/'.$results_array[$i])}}" alt="Image"> </div>
                @endfor
                <!-- <div class="item"><a href="#"><img src="{{asset('frontend/images/brand2.png') }}" alt="Image"></a> </div> -->
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif



  
  
  <div class="footer-newsletter">
    <div class="container">
      <div class="row"> 
        <!-- Newsletter -->
        <div class="col-md-6 col-sm-6">
          <form id="newsletter-validate-detail" method="post" action="">
            @csrf
            <h3>Join Our Newsletter</h3>
            <div class="title-divider"><span></span></div>
            <!-- <p class="sub-title text-center">Get 25% off</p> -->
            <div class="newsletter-inner">
              <input class="newsletter-email" name='email' placeholder='Enter Your Email'/>
              <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
            </div>
          </form>
        </div>
        <!-- Customers Box -->
        <div class="col-sm-6 col-xs-12 testimonials">
          <div class="page-header">
            <h2>What Our Customers Say</h2>
          </div>
          <div class="slider-items-products">
            <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
              <div class="slider-items slider-width-col4 ">
                <div class="holder">
                  <blockquote>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip volutpat.
                    Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel.</blockquote>
                  <div class="thumb"> <img src="{{asset('frontend/images/testimonials-img3.jpg') }}" alt="testimonials img"> </div>
                  <div class="holder-info"> <strong class="name">John Doe</strong> <strong class="designation">CEO, Company</strong></div>
                </div>
                <div class="holder">
                  <blockquote>Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.Lorem ipsum dolor sit ame consetur adipisicing elit.Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.</blockquote>
                  <div class="thumb"> <img src="{{asset('frontend/images/testimonials-img1.jpg') }}" alt="testimonials img"> </div>
                  <div class="holder-info"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, Newspaper</strong> </div>
                </div>
                <div class="holder">
                  <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Donec sit amet eros. Cras feugiat luctus nulla vitae posuere. Suspendisse potenti. </blockquote>
                  <div class="thumb"> <img src="{{asset('frontend/images/testimonials-img2.jpg') }}" alt="testimonials img"> </div>
                  <div class="holder-info"><strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong></div>
                </div>
                <div class="holder">
                  <blockquote>Aliquam erat volutpat. Sed do eiusmod tempor incididunt Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. Donec sit amet eros. Nulla non ornare nisi, sed condimentum lorem. Morbi sed vehicula magna.</blockquote>
                  <div class="thumb"> <img src="{{asset('frontend/images/testimonials-img4.jpg') }}" alt="testimonials img"> </div>
                  <div class="holder-info"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

@endsection
