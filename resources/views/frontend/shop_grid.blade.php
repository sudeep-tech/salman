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
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
          <div class="shop-inner">
            <div class="page-title">
             
                @if(isset($searchResults)) <ul><li><strong>{{@$searchResults->count()}} Results Found</strong></li></ul>@endif
                <h2>{{@$_title}}</h2>
            </div>
           
            <div class="toolbar column">
              <div class="sorter">
                <div class="short-by">
                  <label>Sort By:</label>
                  <select>
                    <option selected="selected">Position</option>
                    <option>Name</option>
                    <option>Price</option>
                    <option>Size</option>
                  </select>
                </div>
                <div class="short-by page">
                  <label>Show:</label>
                  <select>
                    <option selected="selected">16</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
                  @if(isset($products))
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
                              <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                @csrf
                                <input name="id" type="hidden" value="{{$ind_product->id}}">
                                <button type="submit" class="add-to-cart"><span> Add to Cart</span> </button>
                              </form>
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
                @if(isset($searchResults))
                
                @foreach($searchResults as $ind_search_products)
                    @forelse($ind_search_products as $ind_product)
                   
                    @if(isset($ind_product->id) && (@$ind_product->status=='active'))
                   
                <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <!-- <div class="icon-sale-label sale-left">Sale</div> -->
                        <div class="icon-new-label new-right">New</div>
                        @php
                          if(isset($ind_product->product_images)){
                            $product_images=$ind_product->product_images;
                            $another_image=@$product_images[0]->image_name;
                          }
                          @endphp
                        <div class="pr-img-area"> <a title="{{@$ind_product->title}}" href="{{route('product-detail',@$ind_product->slug)}}">
                          <figure> <img class="first-img" height="200px"  src=" @if(isset($ind_product->thumb)) {{asset('uploads/product/'.@$ind_product->thumb)}} @else {{ asset('uploads/product/default.png') }}  @endif" alt="{{@$ind_product->title}}"> @if(isset($ind_product->product_images[0])) <img class="hover-img" height="200px" id='second_img121' src="{{asset('uploads/product/'.$another_image) }}" alt="{{@$ind_product->title}}">@endif</figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                              
                            <div class="mt-button add_to_wishlist"> <a href="{{route('post-wishlist')}}?item_id={{$ind_product->id}}" id="add_wishlist121"> <i class="fa fa-heart"></i> </a> </div>
                            <!-- <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div> -->
                            <div class="mt-button quick-view"> <a href="{{route('quickview')}}?slug={{$ind_product->slug}}" id='quickview121'> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{@$ind_product->title}}" href="{{route('quickview')}}?slug={{$ind_product->slug}}" id="product_detail_link121">{{@$ind_product->title}} </a> </div>
                          <div class="item-content">
                             
                          <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_product->price)) {{number_format($ind_product->price)}} @else {{number_format(@$ind_product->wholesale_price).'/'.@$ind_product->product_quantity_name}} @endif </span> </span> </div>
                            </div>
                            <div class="rating" style="color:gold;"> 
                              @php $product_average_rating=@$ind_product->product_average_rating->avg('average_rate'); @endphp
                             @if(isset($product_average_rating) && !empty($product_average_rating))
                              @if(isset($product_average_rating) && !empty(@$product_average_rating))
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
                                @for($i=1;$i<=5;$i++)<i class="fa fa-star-o"></i>@endfor
                              @endif
                            @else
                              @for($i=1;$i<=5; $i++)
                              <i class='fa fa-star-o'></i>
                              @endfor
                            @endif
                            </div>
                            <div class="pro-action">
                            <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                @csrf
                                <input name="id" type="hidden" id='cart_product_id121' value="{{$ind_product->id}}">
                                <button type="submit" class="add-to-cart"><span> Add to Cart</span> </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                @else
               
                @php Break; @endphp

                @endif
                @empty
                          <div class="container">
                            <h3 style="color:red;" class="text-center">No Product Found!</h3>
                          </div>
                @endforelse
                @endforeach
                @endif
              </ul>
            </div>
            
            <div class="pagination-area ">
              <!-- <ul>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul> -->
              @if(isset($products[0]))
                {{$products->links()}}
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Container End --> 

@endsection