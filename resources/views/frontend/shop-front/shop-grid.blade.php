@extends('frontend.shop-front.shop-front-layout')
@section('main-content')
<div class="container">
    <div class="product-grid-area">
        <ul class="products-grid">
            @if(isset($products))
            <div class="page-title">
             
            
             <h2>{{@$_sub_title}}</h2>
         </div>
            @php $counter=1; @endphp
            @forelse($products as $ind_product)
            
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
                                
                                <button type="button" onclick="btnAddCart( {{@$ind_product->id}} )" class="add-to-cart"><span> Add to Cart</span> </button>
                              
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
        <div class="pagination-area" style="margin-bottom:10px;">
            @if(isset($products[0]))
            {{$products->links()}}
            @endif
        </div>
    </div>
    
</div>

@endsection