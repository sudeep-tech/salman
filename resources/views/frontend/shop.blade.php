@extends('frontend.shop-front.shop-front-layout')
@section('main-content')


<div id='main-contents121'>
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
				          @if(isset($company_data->latest_products))
				            @forelse($company_data->latest_products as $ind_latest_product)
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
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_latest_product->price)) {{number_format($ind_latest_product->price)}} @else {{number_format(@$ind_latest_product->wholesale_price).'/'.@$ind_latest_product->product_quantity_name}} @endif </span> </span> </div>
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
                    <div class="container">
                        <h4 style="color:red;" class="text-center">No Latest Product At A Moment!</h4>
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

  <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
          <div class="shop-inner">
            
            <div class="product-grid-area">
              <ul class="products-grid">
                  @if(isset($company_data->featured_products))
                  <div class="page-title">
                     <h2>Featured Products</h2>
                  </div>
                  @php $counter=1; @endphp
                  @forelse($company_data->featured_products as $ind_product)
                 
                <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        @if(@$_title=='New Arrivals')<div class="icon-new-label new-right">New</div>@endif
                        @php
                          if(isset($ind_product->product_images)){
                            $product_images=$ind_product->product_images;
                            $another_image=@$product_images[0]->image_name;
                          }
                          @endphp
                        <div class="pr-img-area"> <a title="{{@$ind_product->title}}" href="{{route('product-detail',@$ind_product->slug)}}">
                          <figure> <img class="first-img" height="200px"   src=" @if(isset($ind_product->thumb)) {{asset('uploads/product/'.@$ind_product->thumb)}} @else {{ asset('uploads/product/default.png') }}  @endif" alt="{{@$ind_product->title}}"> @if(isset($ind_product->product_images[0])) <img class="hover-img" height="200px"  src="{{asset('uploads/product/'.$another_image) }}" alt="{{@$ind_product->title}}">@endif</figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"> <a href="{{route('post-wishlist')}}?item_id={{$ind_product->id}}"> <i class="fa fa-heart"></i> </a> </div>
                            <!-- <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div> -->
                            <div class="mt-button quick-view"> <a href="{{route('quickview')}}?slug={{$ind_product->slug}}"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{@$ind_product->title}}" href="{{route('quickview')}}?slug={{$ind_product->slug}}">{{@$ind_product->title}} </a> </div>
                          <div class="item-content">
                            <div class="rating row">
                               <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                            </div>
                            <div class="item-price text-center">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_product->price)) {{number_format(@$ind_product->price)}} @else {{@$ind_product->wholesale_price.'/'.@$ind_product->product_quantity_name }} @endif</span> </span> </div>
                              
                            </div>
                            <div class="pro-action">
                             
                                <button type="button" onclick="btnAddCart( {{@$ind_latest_product->id}} )" class="add-to-cart"><span> Add to Cart</span> </button>
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                @php if($counter==4){echo "</ul><ul class='products-grid'>";} $counter++; @endphp
                @empty
                  <div class="container">
                    <h3 style="color:red;" class="text-center">No Product Found!</h3>   
                  </div>
                @endforelse
                @endif
               
              </ul>
            </div>
            
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Container End --> 
</div>
@endsection