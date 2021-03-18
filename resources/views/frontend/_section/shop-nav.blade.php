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

<!-- Inner navigation -->
<div class="container" style="margin-bottom:10px;">
<div class="row"><div class='col-md-12 col-sm-12'><h3 style="background:khaki;" class="text-center">{{$_title}}</h3></div></div>
<nav style="background:grey;">
    <div class="container">
      <div class="row">
        <!-- Mobile Toggle -->
      
        <div class="col-md-9 col-sm-9 jtv-megamenu" style="margin-left:10px;">
          <div class="mtmegamenu">
          
            <ul class="">
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="{{route('shop-fronthome',@$company_data->slug)}}">
                  <div class="title title_font"><span class="title-text">Home</span></div>
                  </a></div>
              </li>
              
              <li class="mt-root">
                <div class="mt-root-item"><a href="{{route('shop-store-latest-products',@$company_data->slug)}}" >
                  <div class="title title_font"><span class="title-text">New Arrivals</span> </div>
                    </a>
                </div>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="{{ route('shop-store-all-products',@$company_data->slug) }}">
                  <div class="title title_font"><span class="title-text">All Products</span></div>
                  </a></div>
              </li>
             
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="{{route('shop-store-about',@$company_data->slug)}}">
                  <div class="title title_font"><span class="title-text">About Us</span></div>
                  </a>
                </div> 
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="{{route('shop-store-contact',@$company_data->slug)}}">
                  <div class="title title_font"><span class="title-text">Contact Us</span> </div>
                  </a></div>
              </li>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>