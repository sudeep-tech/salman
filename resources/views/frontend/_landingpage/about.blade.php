@extends('layouts.landing_layout')
@section('main-content')
    {{-- @include('frontend._section.notification') --}}
     <img src='landing/img/banner/about-banner.jpg'>
    <div class="event-search-area section-padding-80">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                   
                    <div class="text-center">

                        <h1>Welcome To Afnaideal</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Search Area End -->


    <!-- Razo Event Area Start -->
    <section class="razo-events-area ">
        <div class="container">
            <div class="row">

                <!-- Single Razo Event Area -->
               
                    <div class="col-6 d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <h2>Mission</h2>
                        
                            <img src="landing/img/bg-img/64.jpg"  alt="" style="border-top: 5px double #000080;">
                             <p style="padding-right: 28px;"><b>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna."</b></p>
                       
                        <!-- Event Content -->
                        
                    </div>
                    <div class="col-6 d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                         <h2>Vision</h2>
                        
                            <img src="landing/img/bg-img/64.jpg" alt="" style="border-top: 5px double #000080;">
                       
                             <p style="padding-right: 28px;" ><b>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna."</b></p>
                               
                        </div>
                    </div>

                <div class='container'>
                    <h1>Packages</h1>
                    @if(isset($all_packages) && !empty($all_packages))
                    @php
                        $counter=1;
                    @endphp
                    @foreach($all_packages as $key=>$ind_package)
                    <!-- Single Razo Event Area -->
                    <div class="col-12">
                        <div class="single-razo-event-area d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Thumbnail -->
                            <div class="event-thumbnail">
                                <img src="landing/img/bg-img/65.jpg" alt="">
                            </div>
                            <!-- Event Content -->
                            <div class="event-content d-flex align-items-center">
                                <div class="event-text">
                                    <h5></h5>
                                    <div class="event-meta">
                                         <p>{{$ind_package->package_name}}</p>
                                         <ul>
                                            <li><p>{{$ind_package->package_feature1}}</p></li>
                                            <li><p>{{$ind_package->package_feature2}}</p></li>
                                            @if($ind_package->package_feature3)
                                                <li><p>{{$ind_package->package_feature3}}</p></li>
                                            @endif
                                         </ul>
                                    </div>
                                    <p><strong>NRs.{{$ind_package->package_price}} </strong></p>
                                    <a href="{{route('package_detail',$ind_package->id)}}" class="btn read-more-btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                                <!-- Event Purchase Button -->
                                <div class="event-purchase-button">
                                    <a href="{{route('buy_package',$ind_package->package_key)}}" class="btn razo-btn"><i class="icon_cart"></i> Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php

                        $counter++;
                    @endphp
                    @endforeach

                    @endif
                </div>

            </div>


        </div>
    </section>
    <!-- Razo Event Area End -->

@endsection()