<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ config('app.name', 'Aafnaideal.com') }}

        {{ isset($_title) ? '|| '.@$_title : "" }}</title>
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!-- 
<meta name="description" content="best template, template free, responsive Template, fashion store, responsive Template, responsive html Template, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive Template, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/> -->
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <meta name="keywords" content="{{ isset($seo['keywords']) ? $seo['keywords'] : __('seo.META_KEYWORDS') }}">
    <meta name="description" content="{{ isset($seo['description']) ? $seo['description'] : __('seo.META_DESCRIPTION') }}">
    <!-- Facebook share meta tags -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ isset($_title) ? $_title : config('app.name', 'Afnaideal.com') }}">
    <meta property="og:image" content= {{ isset($seo['og_image']) ? $seo['og_image'] : asset('images/ico/afnaideal_logo.png') }}>
    <meta property="og:description" content="{{ isset($seo['og_description']) ? $seo['og_description'] : '' }}">

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


<!-- Favicons Icon -->
<!-- <link rel="shortcut icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/> -->
 <!-- Favicon -->
 <link rel="icon" href="{{ asset('landing/img/core-img/fav-icon.png')}}">
<!-- CSS Style -->
<!--===============================================================================================-->
<link rel="stylesheet" href="{{ asset('frontend/style.css') }}">

<!--===============================================================================================-->

</head>

<body class="cms-index-index" bgcolor='white;'>

<!-- Quickview starts -->

<div id="quick_view_popup-overlay"></div>
<div style="display: block;" id="quick_view_popup-wrap">
  <div id="quick_view_popup-outer">
    <div id="quick_view_popup-content">
    @include('frontend._section.notification')
      <div style="width:auto;height:auto;overflow: auto;position:relative;">
        <div class="product-view-area">
          <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
            <div class="icon-sale-label sale-left">Sale</div>
            <div class="large-image"> <a href="{{asset('uploads/product/'.@$detail->thumb) }}" style="width:321px; height:321px;" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20" > <img class="zoom-img" src="{{asset('uploads/product/'.@$detail->thumb) }}"  style="width:321px; height:321px;"> </a> </div>
            
            <div class="tracker" style="z-index: 1102; background: rgb(135, 135, 135); position: absolute; width: 321px; height: 321px; left: 42.675px; top: 35.6px; cursor: crosshair; opacity: 0;"></div>
            <div class="tracker" style="z-index: 1102; background: rgb(135, 135, 135); position: absolute; width: 321px; height: 321px; left: 42.675px; top: 35.6px; cursor: crosshair; opacity: 0;"></div>
            <div class="magnifier" style="position: absolute; z-index: 1102; width: 64px; height: 64px; left: 193.675px; top: 190.475px; visibility: visible; overflow: hidden; border: 1px solid rgb(221, 221, 221); opacity: 0.1; display: none;">
                <img src="{{asset('frontend/images/products/'.@$detail->thumb) }}" style="position: relative; left: -322px; top: -94.8424px; width: 642px; height: 642px;">
            </div>
            <div class="cursorshade" style="z-index: 1102; position: absolute; width: 160px; height: 160px; top: 100.494px; left: 540.6px; border: 1px solid black; opacity: 0.3; background-color: rgb(255, 255, 255); display: none;"></div>
            <div style="position: absolute; z-index: 1102; top: 201.471px; left: 652.272px; visibility: visible; border: 1px solid black; background: rgb(192, 192, 192); padding: 4px; font: bold 13px Arial; opacity: 0.8; display: none;"></div>
            <div class="tracker" style="z-index: 1102; background: rgb(135, 135, 135); position: absolute; width: 321px; height: 321px; left: 42.675px; top: 35.6px; cursor: crosshair; opacity: 0;"></div>
            
            <div class="flexslider flexslider-thumb">
              <ul class="previews-list slides">
              <li><a href="file://{{asset('uploads/product/'.@$detail->thumb) }}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('uploads/product/'.@$detail->thumb) }}' "><img src="{{asset('uploads/product/'.@$detail->thumb) }}" width="98px" height="98px"  alt ="Thumbnail 1"/></a></li> 
                @if(isset($detail->product_images[0]))
                @foreach(@$detail->product_images as $ind_product_image)
                  @if(count(@$detail->product_images)=='1')
                    <li style="border:none;"></li>
                  @endif
                    <li><a href="file://{{asset('uploads/product/'.@$ind_product_image->image_name) }}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('uploads/product/'.@$ind_product_image->image_name) }}' "><img src="{{asset('uploads/product/'.@$ind_product_image->image_name) }}" width="98px" height="98px" class='img' style="border:none;"  alt = "Thumbnail 2"/></a></li>
                   
                @endforeach
                @else
                <li style="border:none;"></li>
                <li style="border:none;"></li>
                @endif
                <!-- <li><a href="file://{{asset('frontend/images/products/product-8.jpg') }}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('frontend/images/products/product-8.jpg') }}' "><img src="{{asset('frontend/images/products/product-8.jpg') }}" alt = "Thumbnail 1"/></a></li>
                <li><a href="file://{{asset('frontend/images/products/product-2.jpg') }}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('frontend/images/products/product-2.jpg') }}' "><img src="{{asset('frontend/images/products/product-2.jpg') }}" alt = "Thumbnail 1"/></a></li>
                <li><a href="file://{{asset('frontend/images/products/product-3.jpg') }}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('frontend/images/products/product-3.jpg') }}' "><img src="{{asset('frontend/images/products/product-3.jpg') }}" alt = "Thumbnail 2"/></a></li>
                <li><a href="file://{{asset('frontend/images/products/product-4.jpg') }}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('frontend/images/products/product-4.jpg') }}' "><img src="{{asset('frontend/images/products/product-4.jpg') }}" alt = "Thumbnail 2"/></a></li> -->
              </ul>
            </div>
            
            <!-- end: more-images --> 
            
          </div>
          <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7">
            <div class="product-details-area">
              <div class="product-name">
                <h1>{{@$detail->title}}</h1>
              </div>
              @if(isset($detail->price))
              <h4>Retail Price</h4>
              <div class="price-box">
                @php
                    $cost = $detail->price;
                    if($detail->discount > 0):
                        $cost = $cost - ($cost*($detail->discount)/100);
                    endif;
                @endphp

                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">Nrs. @if(isset($detail->old_price)) {{number_format(@$detail->price)}} @else @if(isset($detail->discount)) {{number_format($cost)}} @endif @endif </span> </p>
                @if(isset($detail->old_price) || isset($detail->discount))<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> Nrs.  @if(isset($detail->old_price)) {{number_format(@$detail->old_price)}} @else {{number_format(@$detail->price)}} @endif</span> </p>@endif
              </div>
              @endif
              @if(isset($detail->product_quantity_name,$detail->wholesale_price))
              <h4>Wholesaler Price</h4>
              <div class="price-box">
                    <p class="availability in-stock pull-left" style="margin-bottom:15px;" >Per Quantity <span>{{@$detail->product_quantity_name}}</span></p>
                    <span class="price pull-right">Nrs. {{number_format(@$detail->wholesale_price)}} </span>
                    <p class="old-price"> <span class="price-label"></span> <span class="price"></span> </p>
              </div>
              @endif
              <div class="ratings">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <p class="availability @if(@$detail->stock>0) in-stock @else out-of-stock @endif pull-right">Availability: <span>@if(@$detail->stock>0) In Stock @else Out of Stock @endif</span></p>
              </div>
              <div class="short-description">
                <h2>Quick Overview</h2>
                <p>{{@$detail->summary}} </p>
              </div>
               <div class="product-color-size-area" >
                <div class="color-area" style="margin-left:0px; margin-right:30px !important; padding-right:20px !important;">
                  <h2 class="saider-bar-title">Seller</h2>
                  <div class="size">
                    <ul style="margin-left:0px; margin-right:0px;">
                      <li><a href="#">{{@$detail->company->company_name}}</a></li>
                     
                    </ul>
                  </div>
                </div>
                <div class="size-area">
                  <h2 class="saider-bar-title">Brand</h2>
                  <div class="size">
                    <ul>
                      <li><a href="#">{{isset($detail->brand)?@$detail->brand:'No Brand'}}</a></li>
                     
                    </ul>
                  </div>
                </div>
              </div>

              <!-- <div class="product-color-size-area">
                <div class="color-area">
                  <h2 class="saider-bar-title">Color</h2>
                  <div class="color">
                    <ul>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="size-area">
                  <h2 class="saider-bar-title">Size</h2>
                  <div class="size">
                    <ul>
                      <li><a href="#">S</a></li>
                      <li><a href="#">L</a></li>
                      <li><a href="#">M</a></li>
                      <li><a href="#">XL</a></li>
                      <li><a href="#">XXL</a></li>
                    </ul>
                  </div>
                </div>
              </div> -->
             
             <form action="{{route('cart.add')}}" method="post">
              @csrf
              @if(isset($detail->wholesale_price,$detail->product_quantity_name))
                <div class="row">
                  <div class="col-md-3 col-sm-3 col-xs-6">
                      <label for='price_type' style="color:red; font-weight:bold;">Price Type</label>
                  </div>
                  <div class="numbers-row">
                      <select name="price_type" class="form-control">
                          <option value="retail">Retail</option>
                          <option value="wholesale">Wholesale</option>
                      </select>
                  </div>
              </div>
              @endif
              <div class="product-variation">
                   
                  <div class="cart-plus-minus">
                    <label for="qty">Quantity:</label>
                    <div class="numbers-row">
                        <input type="hidden" name='id' value="{{@$detail->id}}">
                      <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></button>
                      <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="quantity">
                      <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></button>
                    </div>
                  </div>
                  
                  <button class="button pro-add-to-cart" {{ (@$detail->stock<=0)?'disabled':'' }} title="Add to Cart" type="submit"><span><i class="fa fa-shopping-basket"></i> Add to Cart</span></button>
                </form>
              </div>
              <div class="product-cart-option">
                <ul>
                  <li><a href="{{route('post-wishlist')}}?item_id={{@$detail->id}}"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--product-view--> 
        
      </div>
    </div>
    <a style="display: inline;" id="quick_view_popup-close" href="{{route('fronthome')}}"><i class="icon pe-7s-close"></i></a> </div>
</div>


<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js') }}"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js') }}"></script> 
<!-- Slider Js --> 
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider.js') }}"></script> 
<script type="text/javascript" src="{{asset('frontend/js/revolution-extension.js') }}"></script> 
<!-- owl.carousel.min js --> 
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js') }}"></script> 

<!-- jquery.mobile-menu js --> 
<script type="text/javascript" src="{{asset('frontend/js/mobile-menu.js') }}"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="{{asset('frontend/js/jquery-ui.js') }}"></script> 

<!-- main js --> 
<script type="text/javascript" src="{{asset('frontend/js/main.js') }}"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="{{asset('frontend/js/countdown.js') }}"></script> 
<!-- jquery.flexslider js --> 
<script type="text/javascript" src="{{asset('frontend/js/jquery.flexslider.js') }}"></script> 
<!-- Slider Js --> 
<script type="text/javascript" src="{{asset('frontend/js/revolution-slider.js') }}"></script> 

<script type="text/javascript" src="{{asset('frontend/js/cloud-zoom.js') }}"></script>

</body>

</html>
