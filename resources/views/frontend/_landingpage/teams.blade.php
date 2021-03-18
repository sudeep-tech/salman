@extends('layouts.landing_layout')
@section('main-content')
	 <style>
	 	.shaded-box-1{
	 		box-shadow: 1px 1px 2px 1px lightblue;
	 		/* background-color:#F2EAEA; */	
		 }
		 .no-bottom-spacing{
			padding-bottom:0px;
			margin-bottom:0px;
		 }
		 .no-top-spacing{
			 padding-top:0px;
			 margin-top:0px;
		 }
	</style>

<img src="{{asset('landing/img/banner/banner-ourteam.jpg')}}" class='img img-responsive' width="100%">
<!-- Razo Event Area Start -->
<section class="razo-events-area section-padding-80">
    <div class="container-fluid">
		<h3 class='text-center'>Our Teams</h3>
		<center><hr class='yellow_line' width='120px'></center>
	@if(isset($our_team) && !empty($our_team))
		@php
			$counter=1;
		@endphp
		<div class="row">
			@foreach($our_team as $key=>$ind_data)
			@php 
				$image=(isset($ind_data->image))?$ind_data->image:'user_icon.png';
			@endphp
				<div class="col-md-4 col-sm-12 flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
					<center>
						<div class='container col-9 shaded-box-1'>
							<div class='col-8'>
								<img src="{{asset('landing/img/our-team/'.$image)}}"  alt="" class='img img-responsive' width='100%' height="100px">
							</div>
							<div class='col-4'>
							</div>
							<div class='col-8'>
								<h4 class='text-center no-bottom-spacing' style='padding-left:0px; marin-left:0px;'>{{$ind_data->full_name}}</h4>
							</div>
							<div class='col-4'></div>
							<p class='no-top-spacing no-bottom-spacing'>{{$ind_data->department}}</p>
							<p class="no-top-spacing" style='font-size:13px;'>E-mail:<i class='fa fa-envelope'></i> {{$ind_data->email}}</span></p>
							<p style="padding-right: 28px; font-size:13px;">Message: <b>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna."</b></p>
						</div>
						<div class='col-3'></div>
					</center>
				</div>
				@if($counter%3==0)
						</div>
						<div class='row'>
					@endif
					@php
						$counter++;
					@endphp
					@endforeach
					@endif 
			
		</div>
	</div>
</section>






























<!-- 	
    <div class=" section-padding-80">
        <div class="container pt-30 center">
        	<h3 class='text-center'>Team Members</h3>
   
           @if(isset($our_team) && !empty($our_team))

            @php

                $counter=1;

            @endphp

            <div class='row'>

	            @foreach($our_team as $key=>$ind_data)

	            @php 

	                $image=(isset($ind_data->image))?$ind_data->image:'user_icon.png';

	            @endphp
				<div class="col-md-6 d-flex flex-wrap align-items-center mb-50 wow fadeInUp " data-wow-delay="100ms">
	        		
	        		<div class='row shaded-box-1' style='height:300px;'>
		        		<div class='col-md-6'>
		           			<img src="{{asset('landing/img/our-team/'.$image)}}"  alt="user-image" class='img img-responsive' width="100%" height="200px">
		           		</div>
		           		<div class='col-md-6'>
		           			<ul>
			           			<li><p><b>{{$ind_data->full_name}}</b></p></li>
				             	<li><b>{{$ind_data->department}}</b></li>
				             	<li>E-mail:<span>{{$ind_data->email}}</span></li>
			             	</ul>
		           		</div>
		             	<ul>
			             	<li><p>Message:<span> {{(isset($ind_data->message) && !empty($ind_data->message))?$ind_data->message:'Our main focus is to provide best service to the customer and have less issue regarding the use of our company services.'}}</span>
			             	</p></li>
		       			</ul>
		       		</div>
		        </div>
	        	@if($counter%2==0)
	        		</div>
	        		<div class='container row'>
	        	@endif
	        	@php
	        		$counter++;
	        	@endphp
	        	@endforeach
	        	@endif
        	</div> -->











                <!-- {{-- <div class="col-12">
                	<h3 class='text-center'>Team Members</h3>
	               	<div class='container pt-50 center' id='our_team_section'>
	                   @if(isset($our_team) && !empty($our_team))

	                    @php

	                        $counter=1;

	                    @endphp

	                    <div class='container-fluid row'>

	                    @foreach($our_team as $key=>$ind_data)

	                    @php 

	                        $image=(isset($ind_data->image))?$ind_data->image:'user_icon.png';

	                    @endphp

	                        <div class='col-sm-4' style='padding-left:0px;'>

	                            <div class="card" style="width: 18rem;">

	                                <img class="card-img-top" src="{{ asset('landing/img/our-team/'.$image) }}" alt="team-member">

	                                <hr style='padding:0px; margin:0px; border-color:yellow;'>

	                                <div class="card-body" style="background:black;">

	                                    <h5 class="card-title text-center white-text">{{$ind_data->full_name}}</h5>

	                                    <h6 class='card-title text-center white-text'>{{$ind_data->department}}</h5>

	                                    <p class="card-text white-text"> {{(isset($ind_data->message) && !empty($ind_data->message))?$ind_data->message:'Our main focus is to provide best service to the customer and have less issue regarding the use of our company services.'}}

	                                    </p>

	                                </div>

	                            </div>

	                        </div>

	                        @if($counter%3==0)
	                        	@if($counter!=(count($our_team)-1))
	                        		<hr style='box-shadow:1px 1px 0px 0px blue'/>
	                        	@endif
	                            </div>
	                            <div class='container-fluid row'>

	                        @endif

	                       @php

	                        $counter++;

	                        @endphp

	                        @endforeach

	                    </div> 

	                    @endif
	               

                </div> --}} -->
            


<!-- 
        </div>
    </div> -->

@endsection
