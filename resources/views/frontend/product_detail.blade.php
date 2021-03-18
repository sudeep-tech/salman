@extends('layouts.index')
@section('main-content')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('fronthome')}}">Home</a><span>&raquo;</span></li>
            @if(isset($detail->category_name->title))<li class="home"> <a title="" href="{{route('products-by-category',@$detail->category_name->slug)}}">{{@$detail->category_name->title}}</a><span>&raquo;</span></li>@endif
            @if(isset($detail->child_category_name->title))<li class="home"> <a title="" href="{{route('products-by-category',@$detail->child_category_name->slug)}}">{{@$detail->child_category_name->title}}</a><span>&raquo;</span></li>@endif
            <li><strong>{{@$detail->title}}</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
 
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  @if(!isset($detail->id))
  
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
          <h3 style="color:red;" class="text-center">Product Not Found or Not Available Right Now! </h3>
      </div>
    </div>
  </div>
  @else
    @if(@$detail->status=='inactive')
    <div class="main-container col1-layout">
      <div class="container">
        <div class="row">
          <h3>Product Not Available At a Moment! </h3>
        </div>
      </div>
    </div>
    @else
  
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main">
          <div class="product-view-area">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
              <!-- <div class="icon-sale-label sale-left">Sale</div> -->
              <div class="large-image"> <a href="file://{{asset('uploads/product/'.@$detail->thumb)}}" height='473px' width='473px' class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="{{asset('uploads/product/'.@$detail->thumb) }}" height="473px" width="473px" > </a> </div>
              
              <div class="tracker" style="z-index: 1102; background: rgb(135, 135, 135); position: absolute; width: 473px; height: 473px; left: 42.675px; top: 35.6px; cursor: crosshair; opacity: 0;"></div>
            <div class="tracker" style="z-index: 1102; background: rgb(135, 135, 135); position: absolute; width: 473px; height: 473px; left: 42.675px; top: 35.6px; cursor: crosshair; opacity: 0;"></div>
            <div class="magnifier" style="position: absolute; z-index: 1102; width: 64px; height: 64px; left: 193.675px; top: 190.475px; visibility: visible; overflow: hidden; border: 1px solid rgb(221, 221, 221); opacity: 0.1; display: none;">
                <img src="{{asset('frontend/images/products/'.@$detail->thumb) }}" style="position: relative; left: -322px; top: -94.8424px; width: 642px; height: 642px;">
            </div>
            <div class="cursorshade" style="z-index: 1102; position: absolute; width: 160px; height: 160px; top: 100.494px; left: 540.6px; border: 1px solid black; opacity: 0.3; background-color: rgb(255, 255, 255); display: none;"></div>
            <div style="position: absolute; z-index: 1102; top: 201.471px; left: 652.272px; visibility: visible; border: 1px solid black; background: rgb(192, 192, 192); padding: 4px; font: bold 13px Arial; opacity: 0.8; display: none;"></div>
            <div class="tracker" style="z-index: 1102; background: rgb(135, 135, 135); position: absolute; width: 473px; height: 473px; left: 42.675px; top: 35.6px; cursor: crosshair; opacity: 0;"></div>
            

              <div class="flexslider flexslider-thumb">
                <ul class="previews-list slides">
                <li><a href="file://{{asset('uploads/product/'.@$detail->thumb) }}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('uploads/product/'.@$detail->thumb) }}' "><img src="{{asset('uploads/product/'.@$detail->thumb) }}" height="98px" width="98px"   alt ="Thumbnail 1"/></a></li> 
               
                @if(isset($detail->product_images[0]))
                @foreach(@$detail->product_images as $ind_product_image)
                        
                    @if(count(@$detail->product_images)=='1')
                    <li style="border:none;"></li>
                    @endif
                    <li><a href="file://{{asset('uploads/product/'.@$ind_product_image->image_name) }}" class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('uploads/product/'.@$ind_product_image->image_name) }}' "><img src="{{asset('uploads/product/'.@$ind_product_image->image_name) }}"  height="98px" width="98px" class='img' style="border:none;"  alt = "Thumbnail 2"/></a></li>
                @endforeach
                @else
                <li style="border:none;"></li>
                <li style="border:none;"></li>
                @endif
                </ul>
              </div>
              
              <!-- end: more-images --> 
              
            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <div class="product-name">
                <h1>{{@$detail->title}}</h1>
              </div>
              @if(isset($detail->price))
              <h4>Retailer Price</h4>
              <div class="price-box">
                @php
                    $cost = @$detail->price;
                    if(@$detail->discount > 0 && isset($detail->discount)):
                        $cost = $cost - ($cost*(@$detail->discount)/100);
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
                <div class="rating" style="color:gold;"> 
                
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
              
                </div>
                <p class="rating-links"> <a href="#reviews">@if(isset($review_data) && !empty($review_data)) {{count(@$review_data)}} @else 0 @endif Review(s)</a>
                @if((integer)@$detail->stock>0)<p class="availability in-stock pull-right">Availability: <span>In Stock</span></p>@else <p class="availability out-of-stock pull-right">Availability: <span>Out Of Stock</span></p> @endif
              </div>
              <div class="short-description">
                <h2>Quick Overview</h2>
                <p>{{@$detail->summary}}</p>
              </div>
              <div class="product-color-size-area" >
                <div class="color-area" style="margin-left:0px; margin-right:30px !important; padding-right:20px !important;">
                  <h2 class="saider-bar-title">Seller</h2>
                  <div class="size">
                    <ul style="margin-left:0px; margin-right:0px;">
                      <li><a href="{{route('shop-fronthome',@$detail->company->slug)}}">{{@$detail->company->company_name}}</a></li>
                     
                    </ul>
                  </div>
                </div>
                <div class="size-area">
                  <h2 class="saider-bar-title">Brand</h2>
                  <div class="size">
                    <ul>
                      <li><a href="@if(isset($detail->brand)) {{route('products-by-brand',@$detail->brand)}} @else # @endif">{{isset($detail->brand)?@$detail->brand:'No Brand'}}</a></li>
                     
                    </ul>
                  </div>
                </div>
              </div>
              
              <form action="{{route('cart.add')}}" method="post">
              @csrf
              @if(isset($detail->wholesale_price,$detail->product_quantity_name))
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <label for='price_type' style="color:red; font-weight:bold;">Price Type</label>
                    </div>
                    <div class="numbers-row">
                        <select name="price_type" class="form-control">
                            @if(isset($detail->price))<option value="retail">Retail</option>@endif
                            <option value="wholesale">Wholesale</option>
                        </select>
                    </div>
                </div>
              @endif
              <div class="product-variation">
                <div class="cart-plus-minus">
                  <input type="hidden" name='id' value="{{@$detail->id}}">
                  @if(@$detail->stock>=0) 
                    <label for="qty">Quantity:</label>
                    <div class="numbers-row">
                    <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                      <input type="number" class="qty" title="Qty" value="1" maxlength="5" max="{{@$detail->stock}}" min="0" id="qty" name="quantity" >
                    <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div> 
                   
                    </div>
                  @endif
                </div>
                <button class="button pro-add-to-cart" {{ (@$detail->stock<=0)?'disabled':'' }} title="Add to Cart" type="submit"><span><i class="fa fa-shopping-basket"></i> Add to Cart</span></button>
              </div>
              </form>
              <div class="product-cart-option">
                <ul>
                  <li><a href="{{route('post-wishlist')}}?item_id={{@$detail->id}}"><i class="fa fa-heart-o"></i><span>Add to Wishlist</span></a></li>
                  <li><a href="{{route('quickview')}}?slug={{@$detail->slug}}"><i class="fa fa-search"></i><span>Quickview</span></a></li>
                  <!-- <li><a href="#"><i class="fa fa-link"></i><span>Add to Compare</span></a></li> -->
                  <!-- <li><a href="#"><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li> -->
                </ul>
              </div>
              <!-- <div class="pro-tags">
                <div class="pro-tags-title">Tags:</div>
                <a href="#">ecommerce</a>, <a href="#">bootstrap</a>, <a href="#">shopping</a>, <a href="#">fashion</a>, <a href="#">responsive</a> </div> 
               <div class="share-box">
                <div class="title">Share in social media</div>
                <div class="socials-box"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="product-overview-tab">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="product-tab-inner">
                  <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                    <li class="active"> <a href="#description" data-toggle="tab"> Description </a> </li>
                    <li> <a href="#reviews" data-toggle="tab">Reviews</a> </li>
                    <li> <a href="#questions" data-toggle="tab">Questions</a> </li>
                    <li><a href="#about" data-toggle="tab">About</a></li>
                    <li> <a href="#contact" data-toggle="tab">Contact</a> </li>
                    
                  </ul>
                  <div id="productTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="description">
                      <div class="std">
                        <p>{!! html_entity_decode(@$detail->description) !!}</p>
                      </div>
                    </div>
                   
                    <div id="questions" class="tab-pane fade">
                     
                      <div class="std">
                        @guest
                        <div><p style="color:darkorange; ">Login To Ask A Question</p></div>
                        @else
                        @if($detail->vendor_id!=Auth::user()->id)
                        <button type="button" class='btn btn-sm btn-success' onclick="if($('#ask_question').hasClass('hidden')){ $('#ask_question').removeClass('hidden'); document.getElementById('question-input').focus(); }else{ $('#ask_question').addClass('hidden'); }">Ask A question</button>
                        <div class='container row hidden' id="ask_question" style="margin-top:15px;">
                          <form method="post" class='form' action="{{route('post-product-question-answer')}}" >
                            @csrf
                            <input type='text' name="question" id='question-input' class='form-control' placeholder="Ask Any Question Related To This Product.">
                            <input type="hidden" name='product_id' value="{{@$detail->id}}">
                            <button type="submit" class='btn btn-sm btn-primary' style="margin-top:15px;"><i class="fa fa-question-circle"></i> Submit Question </button>
                          </form>
                        </div>
                        @endif
                        @endguest
                        @if(isset($product_question_answers,$product_question_answers[0]))
                          <table  style='font-size:13px;' class="table table-borderless table-responsive-sm">
                            <!-- <div class="review-ratting" style="box-shadow:2px 2px 2px 1px papayawhip;"> -->
                            @foreach($product_question_answers as $key=> $ind_product_answer_questions)
                             <thead>
                                <th>
                                  @if(@Auth::user()->id==$ind_product_answer_questions->user_id)
                                  <div class='row container ' id="question-list-{{@$ind_product_answer_questions->id}}">
                                  {{++$key.'. '.@$ind_product_answer_questions->question}}  <button type="button" class='btn btn-sm btn-primary' onclick="if($('#question-edit-{{@$ind_product_answer_questions->id}}').hasClass('hidden')){ $('#question-edit-{{@$ind_product_answer_questions->id}}').removeClass('hidden'); $('#question-list-{{@$ind_product_answer_questions->id}}').addClass('hidden'); document.getElementById('question-edit-input').focus(); }else{ $('#question-edit-{{@$ind_product_answer_questions->id}}').addClass('hidden'); $('#question-list-{{@$ind_product_answer_questions->id}}').removeClass('hidden'); }">Edit Question</button>  
                                  </div>
                                  <div class='row container hidden' id='question-edit-{{@$ind_product_answer_questions->id}}'>
                                    <form method="post" class='form' action="{{route('post-product-question-answer')}}" >
                                      @csrf
                                      <input type='text' name="question" id='question-edit-input' class='form-control' value="{{@$ind_product_answer_questions->question}}" placeholder="Ask Any Question Related To This Product.">
                                      <input type='hidden' name='question_id' value="{{@$ind_product_answer_questions->id}}"> 
                                     
                                      <button type="submit" class='btn btn-sm btn-primary' style="margin-top:15px;"><i class="fa fa-question-circle"></i> Update Question </button>
                                    </form>
                                  </div>
                                  @else
                                  <div class='row container'>
                                    {{++$key.'. '.@$ind_product_answer_questions->question}}
                                  </div>
                                  @endif
                                </th>
                             </thead>
                             
                              @if($detail->vendor_id==@Auth::user()->id)
                              <tbody>
                              <tr><td>
                                <form method="post" class='form' action="{{route('post-product-question-answer')}}" >
                                  @csrf
                                  <br><label class='col-md-1 col-sm-1 col-lg-1' style="font-weight: bold;">Reply:</label> <div class='col-md-11 col-sm-11 col-lg-11'><input type='text' name="answer" id='answer-input' value="{{@$ind_product_answer_questions->answer}}" class='form-control' placeholder="Reply To This Question"></div>
                                  <input type="hidden" name="question_id" value="{{@$ind_product_answer_questions->id}}">
                                  <label class='col-md-1 col-sm-1 col-lg-1' ></label><div class='col-md-11 col-sm-11 col-lg-11'><button type="submit" class='btn btn-sm btn-primary' style="margin-top:15px;"><i class="fa fa-reply"></i> Submit Reply </button></div>
                                </form>
                              </td></tr>
                              </tbody>
                             @else
                              <tbody>
                               @if(isset($ind_product_answer_questions->answer)) <tr><td><span><br>&nbsp; Reply: </span> {{@$ind_product_answer_questions->answer}}</td></tr>@endif
                             </tbody>
                             @endif
                             @endforeach
                          </table>
                          {!! $product_question_answers->render() !!}
                        @endif
                      </div>
                    </div>
                    <div id="reviews" class="tab-pane fade">
                      <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="container">
                          <div id="tag_container">
                            @include('frontend._section.review-result')
                          </div>
                        </div>
                      
                      </div>
                      <div class="col-sm-7 col-lg-7 col-md-7">
                        <div class="reviews-content-right">
                          <h2>Write Your Own Review</h2>
                          <form method="post" action="{{route('post-product-review')}}">
                            @csrf
                            @php Session::put('product_id',$detail->id); @endphp
                            <h3>You're reviewing: <span>{{@$detail->title}}</span></h3>
                            <h4>How do you rate this product?<em>*</em></h4>
                            <div class="table-responsive reviews-table">
                              <table>
                                <tbody>
                                  <tr>
                                    <th></th>
                                    <th>1 star</th>
                                    <th>2 stars</th>
                                    <th>3 stars</th>
                                    <th>4 stars</th>
                                    <th>5 stars</th>
                                  </tr>
                                  <tr>
                                    <td>Quality</td>
                                    <fieldset >
                                      <td><input type="radio" name='quality_rate' value="1"></td>
                                      <td><input type="radio" name='quality_rate' value="2"></td>
                                      <td><input type="radio" name='quality_rate' value="3"></td>
                                      <td><input type="radio" name='quality_rate' value="4"></td>
                                      <td><input type="radio" name='quality_rate' value="5"></td>
                                    </fieldset>
                                  </tr>
                                  <tr>
                                    <td>Price</td>
                                    <fieldset >
                                      <td><input type="radio" name='price_rate' value="1"></td>
                                      <td><input type="radio" name='price_rate' value="2"></td>
                                      <td><input type="radio" name='price_rate' value="3"></td>
                                      <td><input type="radio" name='price_rate' value="4"></td>
                                      <td><input type="radio" name='price_rate' value="5"></td>
                                    </fieldset >
                                  </tr>
                                  <tr>
                                    <td>Value</td>
                                    <fieldset >
                                    <td><input type="radio" name='value_rate' value="1"></td>
                                      <td><input type="radio" name='value_rate' value="2"></td>
                                      <td><input type="radio" name='value_rate' value="3"></td>
                                      <td><input type="radio" name='value_rate' value="4"></td>
                                      <td><input type="radio" name='value_rate' value="5"></td>
                                  </fieldset >
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="form-area">
                              
                              <div class="form-element">
                                <label>Summary of Your Review(Maximum of 150 characters) <em>*</em></label>
                                <input type="text" max='150' name="summary">
                              </div>
                              <div class="form-element">
                                <label>Review <em>*</em></label>
                                <textarea name="review"></textarea>
                              </div>
                              <div class="buttons-set">
                                <button class="button submit" title="Submit Review" type="submit"><span><i class="fa fa-thumbs-up"></i> &nbsp;Review</span></button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="about">
                        <div class="std">
                             @foreach($detail->vendor_pages as $ind_vendor_pages)
                             @if(@$ind_vendor_pages->page_name=='About' || @$ind_vendor_pages->page_name=='about' || @$ind_vendor_pages->page_name=='about us' || @$ind_vendor_pages->page_name=='About Us' ||@$ind_vendor_pages->page_name=='AboutUs'||@$ind_vendor_pages->page_name=='aboutus' )
                            <div class="container" style="margin-right:0px;">
                                <h3>{{@$ind_vendor_pages->content_title}}</h3>
                               @if(isset($ind_vendor_pages->content_image)) <img src="{{asset('uploads/vendor-images/'.@$ind_vendor_pages->content_image)}}" class="img img-thumbnail img-responsive">@endif
                                <p>{!! html_entity_decode(@$ind_vendor_pages->content_description) !!}</p>
                            </div>
                             @endif
                             @endforeach
                        
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact">
                      <div class="std">
                            @foreach($detail->vendor_pages as $ind_vendor_pages)
                            @if(@$ind_vendor_pages->page_name=='contact' || @$ind_vendor_pages->page_name=='Contact' || @$ind_vendor_pages->page_name=='contact us' || @$ind_vendor_pages->page_name=='Contact Us' ||@$ind_vendor_pages->page_name=='ContactUs'||@$ind_vendor_pages->page_name=='Contactus' )
                            <div class="container" style="margin-right:0px;">
                                <h3>{{@$ind_vendor_pages->content_title}}</h3>
                                @if(isset($ind_vendor_pages->content_image))<center><img src="{{asset('uploads/vendor-images/'.@$ind_vendor_pages->content_image)}}" class="img img-thumbnail img-responsive"></center>@endif
                                @if(isset($ind_vendor_pages->content_description))<p>{!! html_entity_decode(@$ind_vendor_pages->content_description) !!}</p>@endif
                            </div>
                             @endif
                             @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main Container End --> 
 
  

  <!-- Related Product Slider -->
  
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="page-header">
            <h2>Related Products</h2>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 fadeInUp">
                    @if(isset($related_products) && !empty(@$related_products))
                    @foreach($related_products as $ind_related_product)
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                      @php
                          if(isset($ind_related_product->product_images)){
                            $product_images=$ind_related_product->product_images;
                            $another_image=@$product_images[0]->image_name;
                          }
                          @endphp
                        <div class="pr-img-area"> <a title="{{@$ind_related_product->title}}" href="{{route('product-detail',@$ind_related_product->slug)}}">
                          <figure> <img class="first-img" height="200px"  src="{{asset('uploads/product/'.@$ind_related_product->thumb)}}" alt="{{@$ind_related_product->title}}">@if(isset($ind_product->product_images)) <img class="hover-img" height="200px"  src="{{asset('uploads/product/'.$another_image) }}" alt="{{@$ind_related_product->title}}">@endif</figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"> <a href="{{route('post-wishlist')}}?item_id={{$ind_related_product->id}}"> <i class="fa fa-heart-o"></i> </a> </div>
                            <!-- <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-link"></i> </a> </div> -->
                            <div class="mt-button quick-view"> <a href="{{route('quickview')}}?slug={{$ind_related_product->slug}}"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="{{@$ind_related_product->title}}" href="{{route('quickview')}}?slug={{$ind_related_product->slug}}">{{@$ind__related_product->title}}</a> </div>
                          <div class="item-content">
                           <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">Nrs. @if(isset($ind_related_product->price)) {{number_format(@$ind_related_product->price)}} @else {{@$ind_related_product->wholesale_price.'/'.@$ind_related_product->product_quantity_name }} @endif</span> </span> </div>
                            </div>
                            <div class="rating" style="color:gold;"> 
                              @php $product_average_rating=@$ind_related_product->product_average_rating->avg('average_rate'); @endphp
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
                            <button type="button" onclick="btnAddCart( {{@$ind_related_product->id}} )" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    @endforeach
                    @endif
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Related Product Slider End --> 
  @endif
  @endif

@if(isset($review_data[0]))

<script type="text/javascript">
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
    
    $(document).ready(function()
    {
        $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();
  
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
  
            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];
  
            getData(page);
        });
  
    });
  
    function getData(page){
        $.ajax(
        {
            url: "{{route('product-detail',$detail->slug)}}?page=" + page,
            type: "get",
            datatype: "html"
        }).done(function(review_data){
            $("#tag_container").empty().html(review_data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
    }
</script>  
@endif
@endsection