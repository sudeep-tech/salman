@extends('frontend.shop-front.shop-front-layout')
@section('main-content')
    @if(isset($company_data))
       
        @foreach($company_data->vendor_pages as $ind_page_data)
        @if($_sub_title=='About Us')
            @if(@$ind_page_data->page_name=='About' || @$ind_page_data->page_name=='about' || @$ind_page_data->page_name=='about us' || @$ind_page_data->page_name=='About Us' ||@$ind_page_data->page_name=='AboutUs'||@$ind_page_data->page_name=='aboutus' )
            <div class="container">
                <h4 class="text-center">{{@$ind_page_data->content_title}}</h4>
                <div class="container">
                   @if(isset($ind_page_data->content_image)) <center><img src="{{asset('uploads/vendor-images/'.@$ind_page_data->content_image)}}"></center> @endif
                </div>
                <div class="container text-center">
                    <p>{!! @$ind_page_data->content_description !!}</p>
                </div>
            </div>
            @endif
            @endif
        @if($_sub_title=='Contact Us')
        @if(@$ind_page_data->page_name=='contact' || @$ind_page_data->page_name=='Contact' || @$ind_page_data->page_name=='contact us' || @$ind_page_data->page_name=='Contact Us' ||@$ind_page_data->page_name=='ContactUs'||@$ind_page_data->page_name=='Contactus' )
        <div class="container">
                <h4 class="text-center">{{@$ind_page_data->content_title}}</h4>
                <div class="container">
                @if(isset($ind_page_data->content_image)) <center> <img src="{{asset('uploads/vendor-images/'.@$ind_page_data->content_image)}}"></center> @endif
                </div>
                <div class="container text-center">
                    <p>{!! @$ind_page_data->content_description !!}</p>
                </div>
            </div>
        @endif
        @endif
        @endforeach
    @else
    <div class="container">
        <h3 class="text-center">No Content Found On This Section!</h3>
    </div>
    @endif
@endsection