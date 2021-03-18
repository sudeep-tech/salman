@extends('layouts.index')
@section('main-content')

<!-- Main Container -->
<section class="main-container col2-right-layout">
    <div class="main  container">
        <div class="row">
            <div class="col-main col-sm-10 col-xs-12">
                <div class="cart">
                    <div class="page-content page-order">
                        <div class="page-title">
                            <h2>Shopping Cart</h2>
                        </div>
                        <!-- <div class="page-content page-order">
                            <h2 class="text-center" style="font-weight:bold;">Retail Cart</h2>
                            <center><hr style="box-shadow:1px 1px 1px 1px red; border:2px;" width="200px"></center>
                        </div> -->
                        <div class="order-detail-content">
                            <div class="table-responsive">
                                <table class="table table-bordered cart_summary">
                                    <thead>
                                        <tr>
                                        <th class="cart_product">Product</th>
                                        <th>Description</th>
                                        <th>Availability</th>
                                        <th>Unit price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th  class="action"><i class="fa fa-trash-o"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach(Cart::getContent() as $ind_cart_item)
                                        
                                        <tr>
                                        <td class="cart_product"><a href="{{route('product-detail',@$ind_cart_item->attributes->slug)}}"><img src="{{asset('uploads/product/'.@$ind_cart_item->attributes->thumb)}}" alt="Product"></a></td>
                                        <td class="cart_description"><p class="product-name"><a href="{{route('quickview')}}?slug={{$ind_cart_item->attributes->slug}}">{{@$ind_cart_item->name}} </a></p>
                                            <!-- <small><a href="#">Color : Red</a></small>
                                            <small><a href="#">Size : M</a></small></td> -->
                                        <td class="availability in-stock"><span class="label">In Stock </span></td>
                                        <td class="price"><span>Nrs. {{number_format(@$ind_cart_item->price)}}</span></td>
                                        
                                        <td class="quantity">
                                            <form method='post' id='quantity_form' action="{{route('cart.update-from-cart-page-only')}}">
                                            @csrf
                                                <input type="hidden" name="id" value="{{@$ind_cart_item->id}}"> 
                                            <input type="tel" name="quantity[]" id='qty' class="form-control input-sm" style="width:80px;"  data-id="{{@$ind_cart_item->id}}" value="{{ (integer)$ind_cart_item->quantity }} ">
                                            
                                            <button type="submit" class='btn-sm btn-primary'  style="border:none; padding:3px; margin-top:5px;" >Update Cart</button>
                                            </form>
                                        </td>
                                        @php
                                            $ind_cart_total=@$ind_cart_item->quantity*@$ind_cart_item->price;
                                        @endphp
                                        <td class="price">Nrs. {{number_format($ind_cart_total)}}<span></span></td>
                                        <td class="action">
                                            <form method='post' action="{{route('cart.clear',@$ind_cart_item->id)}}">
                                                @csrf
                                                <input type='hidden' name='price_type' value="retailer">
                                                <button type='submit'  style="border:none; background:white;"><i class="icon-close" style="font-size:15px;"></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                    <tfoot>
                                        <!-- <tr>
                                        <td colspan="2" rowspan="2"></td>
                                        <td colspan="3">Total products (tax incl.)</td>
                                        <td colspan="2">$237.88 </td>
                                        </tr> -->
                                        <tr>
                                            <td colspan="2" rowspan="2"></td>
                                            <td colspan="3"><strong class="pull-right">Total:</strong></td>
                                            <td colspan="2"><strong>Nrs. {{number_format(@Cart::getSubTotal())}} </strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="cart_navigation"> <a class="continue-btn" href="{{route('fronthome')}}"><i class="fa fa-arrow-left"> </i>&nbsp; Continue shopping</a> <a class="checkout-btn" href="{{ route('checkout') }}"><i class="fa fa-check"></i> Proceed to checkout</a> </div>
                        </div>
                    </div>
                    

                    <div class="page-content page-order">
                        <!-- Wholesaler Cart -->
                        <!-- <div class="page-content page-order">
                            <h2 class="text-center" style="font-weight:bold;">Wholesale Cart</h2>
                            <center><hr style="box-shadow:1px 1px 1px 1px red; border:2px;" width="200px"></center>
                        </div>
                        <div class="order-detail-content">
                            <div class="table-responsive">
                                <table class="table table-bordered cart_summary">
                                    <thead>
                                        <tr>
                                        <th class="cart_product">Product</th>
                                        <th>Description</th>
                                        <th>Availability</th>
                                        <th>Unit price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th  class="action"><i class="fa fa-trash-o"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    
                                    
                                    </tbody>
                                    <tfoot>
                                       
                                        <tr>
                                            <td colspan="2" rowspan="2"></td>
                                            <td colspan="3"><strong class="pull-right">Total:</strong></td>
                                            <td colspan="2"><strong>Nrs.  </strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="cart_navigation"> <a class="continue-btn" href="{{route('fronthome')}}"><i class="fa fa-arrow-left"> </i>&nbsp; Continue shopping</a> <a class="checkout-btn" href="{{ route('checkout') }}"><i class="fa fa-check"></i> Proceed to checkout</a> </div>
                        </div> -->

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
                        
                        <li><a href="{{route('wishlist')}}">My Wishlist</a></li>
                        <li class="current"><a href="{{route('shopping-cart')}}">My Cart</a></li>
                        <!-- <li class="last"><a href="#">Newsletter Subscriptions</a></li> -->
                    </ul>
                    </div>
                </div> 
            </aside>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
//   / Update record
$(document).on("change", "#qty" , function(e) {
    var _token=CSRF_TOKEN;
    
    
    var id = $(this).data('id');
    var quantity=$(this).val();
    var url=$('#quantity_form').attr('action');
    alert(url);
    // var url="{{route('cart.update-from-cart-page-only')}}";
 
    $.ajax({
      url: url,
      type: 'post',
      data: {"_method": 'POST','_token': CSRF_TOKEN, 'id': id, 'quantity': quantity},
      success: function(response){
          alert('Success');
        alert(response);
      }

    });
});
</script>

@endsection