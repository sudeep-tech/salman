<div class="top-cart-content">
    <div class="block-subtitle hidden">Recently added items</div>
    <ul id="cart-sidebar" class="mini-products-list">
    @if(!isset($cart_data))
    @php $cart_data=Cart::getContent(); @endphp
    @endif
    @if(isset($cart_data))
    
    @foreach($cart_data as $ind_cart_item)
    
    <li class="item odd"> <a href="{{route('product-detail',$ind_cart_item->attributes->slug)}}" title="{{$ind_cart_item->name}}" class="product-image"><img src="{{asset('uploads/product/'.@$ind_cart_item->attributes->thumb) }}" alt="Cart-item" width="50"></a>
        <div class="product-details"> <button style="border:none; background:none;" onclick="btnClearCart({{@$ind_cart_item->id}})"  title="Remove This Item" class="remove-cart"><i class="pe-7s-trash"></i></button>
        <p class="product-name"><a href="{{route('quickview')}}?slug={{$ind_cart_item->attributes->slug}}">{{@$ind_cart_item->name}}</a> </p>
        <strong>{{@$ind_cart_item->quantity}}</strong> x <span class="price">Nrs. {{number_format(@$ind_cart_item->price)}}</span> </div>
    </li>
    @endforeach
    @endif
    
    </ul>
    <div class="top-subtotal">Subtotal: <span class="price">Nrs. {{ number_format(Cart::getSubTotal()) }}</span></div>
    <div class="actions">
        <!-- <button class="btn-checkout" type="button" onClick="location.href='{{route('checkout')}}'"><i class="fa fa-check"></i><span>Checkout</span></button> -->
        <button class="view-cart" type="button" onClick="location.href='{{route('shopping-cart')}}'"><i class="fa fa-shopping-cart"></i><span>View Cart</span></button>
    </div>
</div>