@extends('layouts.landing_layout')
    
    <style>
        a:hover{
            text-decoration: none;
        }
        .package_price{
            color:gold;
        }

        .yellow_line{

            box-shadow:1px 1px 1px yellow;

        }

        .package_name{
            margin-top:20px;
            color:white; 
        }
        .blue_line{
            box-shadow:1px 1px 1px blue;
        }

        .pricing_item {
            font-size:15px;
            height: 100%;
            background-color: #0a2642;
            padding-top: 51px;
            padding-bottom: 162px;

            -webkit-transition: all 400ms ease;

            -moz-transition: all 400ms ease;

            -ms-transition: all 400ms ease;

            -o-transition: all 400ms ease;

            transition: all 400ms ease;
        }
    </style>

@section('main-content')
<section style='background-image:url("{{asset('landing/img/background1.jpg')}}"); background-size: cover;'>

    <div class='container-fluid' style="margin-left:20px !important;">

        @if(isset($all_packages) && !empty($all_packages))
        @php
            $counter=1;
        @endphp
        <h1 class='text-center' style="text-decoration:underline;"><strong>Available Packages</strong> </h1>
        <center><div class='container' id='special_packages_section'>
        @foreach($all_packages as $key=>$ind_package)
            
            <div class=" @if($all_packages->count()==1) col-md-8 col-md-offset-2 col-sm-12 @elseif($all_packages->count()==2) col-md-6 col-sm-6 @else col-sm-12 col-md-3 col-lg-3 @endif" style='margin-top:50px; padding-bottom:0px;'>

                <div class="card pricing_item" style="width: 35rem; background-color:#0a2642;">

                    <div class="card-body">

                        <h5 class="card-title text-center block" style='margin-top:20px; color:white; font-size:2rem;'><strong>{{$ind_package->package_name}}</strong></h5>

                        <h5 class='card-title text-center package_price' style="font-size:1.9rem;">Nrs.{{$ind_package->package_price}} </h5>

                        <p class='card-text text-center' style='color:#00cc66;'>Per {{$ind_package->price_per}}</p>

                        <p class="card-text text-center" style='color:white;'> {{$ind_package->package_feature1}}</p>

                        <p class='card-text text-center' style='color:white;'>{{$ind_package->package_feature2}}</p>

                        <p class='card-text text-center' style='color:white;'>{{ (isset($ind_package->package_feature3) && !empty($ind_package->package_feature3))?$ind_package->package_feature3:'' }}</p>

                        <p class='card-text text-center'>

                            <hr class='yellow_line'>

                            <center><a href="{{ route('package_detail', $ind_package->id) }}" class='btn btn-warning' style='align:center'><strong>Read More</strong> <img src="{{asset('landing/img/play-button.png')}}" class='img img-responsive img-thumbnail' width='30px' height='20px'/></a></center>

                        </p>

                    </div>
                </div>
            </div>

            @endforeach

        </div></center> <!-- row ends -->

        @endif
        <div class='container-fluid' style="margin-top:20px; background:lavenderblush;">
            <p class='text-center text-primary text-dark'>Note: Feel Free to contact us if you have any doubts about our packages.
            You can send us some feedback from contact page</p>
        </div>
            <!-- Regular Package list -->



    </div>

</section>

@endsection