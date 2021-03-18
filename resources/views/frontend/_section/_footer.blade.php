
<!-- JS --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script>
  function btnAddCart(product_id,id=false) {
   event.preventDefault();
   
  var $this=$(this);
   
  var id = product_id;
  var _token= "{{ csrf_token() }}"
  var url = "{{ route('cart.add.ajax') }}";
  
  $.ajax({
    type: "POST",
    url: "{{@Action('Frontend\CartController@postCartAjax')}}",
    data: { _token:_token, id:id},
    dataType:'json',
    beforeSend: function (data) {
        $this.button('loading');
    },
    success: function (data) {
      if(data.message!=null){
        alert(data.message);
      }
      $('#cart-total-number').text(data.cart_total);
      $('#mini-cart-items-121').empty();
      $('#mini-cart-items-121').load('/load_mini_cart121');
      
    },
    error: function (data) {
      alert('Something Went Wrong!');
    }
  });
}
function btnClearCart(product_id) {
   event.preventDefault();
  var id = product_id;
  var _token= "{{ csrf_token() }}"
  var url = "{{ route('cart.clear.ajax') }}";
  
  $.ajax({
    type: "POST",
    url: "{{@Action("Frontend\CartController@clearAjax")}}",
    data: { _token:_token, id:id},
    dataType:'json',
    success: function (data) {
      if(data.message!=null){
        alert(data.message);
      }
      $('#cart-total-number').text(data.cart_total);
      $('#mini-cart-items-121').empty();
      $('#mini-cart-items-121').load('/load_mini_cart121');
      
    },
    error: function (data) {
      alert('Something Went Wrong!');
    }
  });
}
function btnAddWishlist(product_id) {
   event.preventDefault();
  var item_id = product_id;
  var _token= "{{ csrf_token() }}"
  var url = "{{ route('post-wishlist-ajax') }}";
  
  $.ajax({
    type: "POST",
    url: "{{@Action("Frontend\CartController@postCartAjax")}}",
    data: { _token:_token, item_id:id},
    dataType:'json',
    success: function (data) {
      if(data.message!=null){
        alert(data.message);
      }
      $('#wishlist-total-number').text(data.wishlist_total);
      
    },
    error: function (data) {
      alert('Something Went Wrong!');
    }
  });
}
  </script>
<!-- jquery js --> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#search_121').on('keyup',function(){
		var value=$(this).val();
		$.ajax({
		type : 'get',
		url : '{{route('ajax-search')}}',
		data:{'search':value},
		success:function(data){
		$('tbody').html(data);
		}
		});
		})
	});
    </script>
<script type='text/javascript'>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 865,
	            startheight: 450,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,
					

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });

        });
        </script>
      
        <script type="text/javascript" src="{{asset('frontend/js/cloud-zoom.js') }}"></script>
        
</body>

</html>
