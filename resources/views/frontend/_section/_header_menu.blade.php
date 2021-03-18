@php 
  $current_route=Route::currentRouteName();
@endphp
<body class="@if(@$current_route=='fronthome') cms-index-index cms-home-page @endif @if(@$current_route=='shopping-cart') shopping_cart_page @endif">

<!-- mobile menu -->
<div id="mobile-menu">
  <h4 class="text-center" style="color:white;">Categories</h4>
  <ul>
    @if(isset($categories_for_menu))
      @foreach($categories_for_menu as $ind_categories)
        <li><a href="" >{{@$ind_categories->title}}</a>
          @if(isset($all_level_two_categories))
          @if(isset($ind_categories->levelTwoCategories[0]))
          <ul>
            @foreach($ind_categories->levelTwoCategories as $ind_level_two_category)
            @foreach($all_level_two_categories as $check_level_two_category)
            
            @if($ind_level_two_category->child_id==$check_level_two_category->id)
            
              <li><a href="" ><span>{{@$check_level_two_category->title}}</span></a>
                @if(isset($check_level_two_category->sub_category[0]))
                  <ul class='mobile-menu'>
                   
                          <li><a href=""></a></li>
                        @endif
                      @endforeach
                    @endforeach
                  </ul>
                @endif
              </li>
            @endif
            @endforeach
            @endforeach
          </ul> 
          @endif
          @endif
        
        </li>
      @endforeach
    @endif
  </ul>
  <h4 class="text-center" style="color:white;">Menu</h4>
  <ul class="mobile-menu01">
    <li><a href=""><span>Home</span></a></li>
    <li><a href=""><span>Featured Products</span></a></li>
    <li><a href=""><span>New Arrivals</span></a></li>
   
      <ul class='mobile-menu'>
        <li><a href="">Retailers</a>
          <ul>
            @if(isset($retailers_for_list[0]))
            @foreach($retailers_for_list as $ind_retailer_data)
            <li><a href="">{{$ind_retailer_data->company_name}}</a></li>
            @endforeach
            @endif
          </ul>
        </li>
        <li><a href="">Wholesalers</a>
          <ul>
            @if(isset($wholesalers_for_list[0]))
            @foreach($wholesalers_for_list as $ind_wholesaler_data)
            <li><a href="">{{$ind_wholesaler_data->company_name}}</a></li>
            @endforeach
            @endif
          </ul>
        </li>
        <li><a href="">Wholesaler+Retailer</a>
          <ul>
            @if(isset($both_accounts_for_list[0]))
            @foreach($both_accounts_for_list as $ind_both_acccount_data)
            <li><a href="">{{$ind_both_acccount_data->company_name}}</a></li>
            @endforeach

            @endif
          </ul>
        </li>
      </ul>
    
    
  </ul>
</div>
<!-- end mobile menu -->


<div id="page"> 
  

 <!-- Header -->
 <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container-fluid" style="margin-left:5%; margin-right:5%; ">
          <div class="row">


              <div class="col-sm-12 col-md-12">
                  <div id='google_translate_elememt'></div>
              </div>
         
              <script type='text/javascript' src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              <script type='text/javascript'>
                  function googleTranslateElementInit(){
                    new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element');
                    
                  }
              </script>



            <div class="col-sm-2 col-md-2 col-xs-12"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs hidden-sm">Welcome @guest To Aafnaideal @else {{\Auth::user()->name}} @endguest</div>
              <!-- Language &amp; Currency wrapper -->

             
              
              
              
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                 
                      <div class="block block-language form-language">
                        <div class="lg-cur"><span><img src="{{asset('frontend/images/flag-english.jpg') }}" alt="english"><span class="lg-fr">English</span><i class="fa fa-angle-down"></i></span></div>
                        <ul>
                          <li><a class="selected" href="#"><img src="{{asset('frontend/images/flag-english.jpg') }}" alt="english"><span>English</span></a></li>
                          <li><a href="#"><img src="{{asset('frontend/images/flag-nepal.jpg') }}" alt="Nepali"><span>Nepali</span></a></li>
                          <li><a href="#"><img src="{{asset('frontend/images/flag-india.jpg') }}" alt="Indian"><span>Indian</span></a></li>
                        
                        </ul>
                      </div> 
                  <!-- <div class="block block-currency">
                    <div class="item-cur"><span>USD</span><i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li><a href="#"><span class="cur_icon">€</span>EUR</a></li>
                      <li><a href="#"><span class="cur_icon">¥</span>JPY</a></li>
                      <li><a class="selected" href="#"><span class="cur_icon">$</span>USD</a></li>
                    </ul>
                  </div> -->
                </div>
              </div>
            </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-md-10 col-sm-10 col-xs-12"><span class="phone  hidden-xs hidden-sm" style="color:red; font-weight:bold; margin-right:5px;">Minimum Purchase of Nrs. 999 is required!</span>
            <span class="phone  hidden-xs hidden-sm">Call Us: +977 9841977193</span>
            
              <ul class="links">
                <li class="hidden-xs"><a title="Frequently Asked Questions" href="}"><span>FAQs</span></a></li>
                <!-- <li><a title="Store Locator" href="#"><span>Store Locator</span></a></li> -->
                <li><a title="Checkout" href=""><span>Checkout</span></a></li>
                <li>
                  <div class="dropdown"><a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="">Account Dashboard</a></li>
                      <li><a href="">Wishlist</a></li>
                      <li><a href="">Order Tracking</a></li>
                      <!-- <li><a href="about_us.html">About us</a></li>
                      <li><a href="">Contact us</a></li> -->
                      <li class="divider"></li>
                      @guest
                      <li><a href="">Log In</a></li>
                      <li><a href="">Register</a></li>
                      @else
                      <li><a href="">Change Password</a></li>
                      <li><a href="">Logout</a></li>

                      @endguest
                    </ul>
                  </div>
                </li>
                @guest
                <li><a title="login" href=""><span>Login</span></a></li>
                <li><a title="register" href=""><span>Register</span></a></li>
                @else
                <li><a title="logout" href=""><span>Logout</span></a></li>
                @endguest
                <li><a title="Vendor Side" href=""><span>Vendor Side</span></a></li>
                <!-- <li><a title="About Us" href="">About Us</a></li>
                <li><a title="Contact Us" href="">Contact Us</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      @include('frontend._section.notification')
      <!-- header inner -->
      <div class="header-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12 jtv-logo-block"> 
              
              <!-- Header Logo -->
              <div class="logo"><a title="e-commerce" href="" style="margin:0px; padding:0px;"><img alt="Aafnai Deal" title="Aafnai Deal" src="{{asset('frontend/images/aafnaideal_logo1.png') }}"></a> </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-6 jtv-top-search"> 
              
              <!-- Search -->
              
              <div class="top-search">
                <div id="search">
                  <form method="get" action="">
                    <div class="input-group">
                      <!-- <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                        <option>All Categories</option>
                        <option>women</option>
                        <option>&nbsp;&nbsp;&nbsp;Chair </option>
                        <option>&nbsp;&nbsp;&nbsp;Decoration</option>
                        <option>&nbsp;&nbsp;&nbsp;Lamp</option>
                        <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                        <option>&nbsp;&nbsp;&nbsp;Sofas </option>
                        <option>&nbsp;&nbsp;&nbsp;Essential </option>
                        <option>Men</option>
                        <option>Electronics</option>
                        <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                        <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                      </select> -->
                      <input type="text" class="form-control" placeholder="Enter your search..." name="q">
                      <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </div>
              
              <!-- End Search --> 
              
           
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 top-cart">
              <div style="float:left">
                <div class="mini-cart">
              <div class="basket dropdown-toggle">
                <a href="">
                  <div class="cart-icon"><i class="icon-heart icons"></i><span class="cart-total" id='wishlist-total-number'> @if(Auth::check()) {{Wishlist::count(Auth::user()->id) }} @elseif(Session::getId()!=null) {{ Wishlist::count(Session::getId(),'session') }} @else 0 @endif</span></div>
                  <div class="shoppingcart-inner hidden-xs"><span class="cart-title">Wishlist</span> </div>
                </a>
                </div>
              <div>
              </div></div></div>
              <!-- <div class="link-wishlist"> <a href="#"> <i class="icon-heart icons"></i><span> Wishlist</span></a> </div> -->
              <!-- top cart -->
              <div class="top-cart-contain">
                <div class="mini-cart">
                  <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                    <div class="cart-icon"><i class="icon-basket-loaded icons"></i><span class="cart-total" id='cart-total-number'>{{Cart::getTotalQuantity()}}</span></div>
                    <div class="shoppingcart-inner hidden-xs"><span class="cart-title">My Cart</span> </div>
                    </a></div>
                  <div>
                  <div id="mini-cart-items-121">
                    @include('frontend/_section/mini-cart',['cart_data'=>Cart::getContent()]);
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->
  <nav>
    <div class="container">
      <div class="row">
        <!-- Mobile Toggle -->
        <div class="mm-toggle-wrap">
          <div class="mm-toggle"><i class="fa fa-align-justify"></i> 
          </div>
          <span class="mm-label mm-toggle">Expand Menu</span> 
        </div>
        <!-- Mobile toggle ends -->
        <div class="col-md-3 col-sm-3 mega-container hidden-xs">
          <div class="navleft-container">
            <div class="mega-menu-title">
              <h3><span>All Categories</span></h3>
            </div>
            
            <!-- Shop by category -->
            <div class="mega-menu-category">
              <ul class="nav">
                @if(isset($categories_for_menu))
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                @foreach($categories_for_menu as $ind_categories)
                <li><a href="" class='level_one_anchor' >{{@$ind_categories->title}}</a>
                @if(isset($all_level_two_categories))
                @if(isset($ind_categories->levelTwoCategories[0]))
                
                <div class="wrap-popup column1" >
                    <div class="popup">
                      <ul class="nav">
                  @foreach($ind_categories->levelTwoCategories as $ind_level_two_category)
                  @foreach($all_level_two_categories as $check_level_two_category)
                 
                  @if($ind_level_two_category->child_id==$check_level_two_category->id)
                  
                    <li><a href=""><span>{{@$check_level_two_category->title}}</span></a>
                      @if(isset($check_level_two_category->sub_category[0]))
                      
                      <div class="wrap-popup column2 hidden level_three_div" id='level_three_cat_div-{{@$check_level_two_category->id}}'>
                        <div class="popup">
                          <ul class="nav">
                            @foreach($check_level_two_category->sub_category as $ind_level_three_category)
                            @foreach($all_level_three_categories as $check_level_three_category)
                            @if($ind_level_three_category->child_id==$check_level_three_category->id)
                      
                            <li><a href=""><span>{{@$check_level_three_category->title}}</span></a></li>
                            @endif
                            @endforeach
                            @endforeach
                          </ul>
                        </div>
                      </div>
                    </li>
                    <script type='text/javascript'>
                      jQuery('#level_two_cat_anchor-{{@$check_level_two_category->id}}').hover(function(){
                          if(jQuery('#level_three_cat_div-{{@$check_level_two_category->id}}').hasClass('hidden')){
                              jQuery('#level_three_cat_div-{{@$check_level_two_category->id}}').removeClass('hidden');
                          }
                      });
                      jQuery('.level_one_anchor').hover(function(){
                          if(!jQuery('#level_three_cat_div-{{@$check_level_two_category->id}}').hasClass('hidden')){
                              jQuery('#level_three_cat_div-{{@$check_level_two_category->id}}').addClass('hidden');
                          }
                      });
                    </script>
                    @endif
                  @endif
                  @endforeach
                  @endforeach
                    </ul>
                  </div>
                </div>
                @endif
                @endif
                </li>
                @endforeach
                @endif


              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 jtv-megamenu">
          <div class="mtmegamenu">
            <ul class="hidden-xs">
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="">
                  <div class="title title_font"><span class="title-text">Home</span></div>
                  </a></div>
              </li>
              
              <li class="mt-root">
                <div class="mt-root-item"><a href="">
                  <div class="title title_font"><span class="title-text">New Arrivals</span> </div>
                  </a></div>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="{{ route('frontend-product-list') }}">
                  <div class="title title_font"><span class="title-text">All Products</span></div>
                  </a></div>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="#">
                  <div class="title title_font"><span class="title-text">Retailers & Wholesalers</span></div>
                  </a></div>
                  <ul class="menu-items col-xs-12">
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"> <a href="">Retailers</a></div>
                    <ul class="submenu">
                     
                      @if(isset($retailers_for_list[0]))
                      @foreach($retailers_for_list as $ind_retailer_data)
                      <li class="menu-item">
                        <div class="title"> <a href="">{{@$ind_retailer_data->company_name}}</a></div>
                      </li>
                      @endforeach
                      <li class="menu-item"><div class="title"><a href="">View All</a></div></li>
                      @else
                      <li class="menu-item">
                        <div class="title">No Retailer Found</div>
                      </li>
                      @endif
                      
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"> <a href="">Wholesalers </a></div>
                    <ul class="submenu">
                      @if(isset($wholesalers_for_list[0]))
                      @foreach($wholesalers_for_list as $ind_wholesaler_data)
                      <li class="menu-item">
                        <div class="title"> <a href="">{{@$ind_wholesaler_data->company_name}}</a></div>
                      </li>
                      @endforeach
                      <li class="menu-item"><div class="title"><a href="">View All</a></div></li>
                      @else
                      <li class="menu-item">
                        <div class="title">No Wholesaler Found</div>
                      </li>
                      @endif
                      
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-3 ">
                    <div class="title title_font"> <a href="">Wholesaler+Retailer</a></div>
                    <ul class="submenu">
                      @if(isset($both_accounts_for_list[0]))
                      @foreach($both_accounts_for_list as $ind_both_acccount_data)
                      <li class="menu-item depth-2 category ">
                        <div class="title"> <a href="">{{@$ind_both_acccount_data->company_name}}</a></div>
                      </li>
                     
                      @endforeach
                      <li class="menu-item"><div class="title"><a href="">View All</a></div></li>
                      @else
                      <li class="menu-item">
                        <div class="title">No Wholesaler+Retailer Found</div>
                      </li>
                      @endif
                      
                    </ul>
                  </li>
                  
                </ul>
              </li>
             
              <li class="mt-root demo_custom_link_cms"><a href="">
                <div class="mt-root-item">
                  <div class="title title_font"><span class="title-text">About Us</span></div>
                  </a></div>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="">
                  <div class="title title_font"><span class="title-text">Contact Us</span> </div>
                  </a></div>
              </li>
              <li><a href="">Sale On Aafnaideal</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
 