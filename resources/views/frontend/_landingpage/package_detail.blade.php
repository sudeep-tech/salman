@extends('layouts.landing_layout')
@section('main-content')
<style>
	.shaded-box{
		box-shadow: 0px 1px 1px 1px skyblue;
	}
	.lr-padding-0{
		padding-right: 0px;
		padding-left: 0px;
	}
</style>
    {{-- @include('frontend._section.notification') --}}
     <img src="{{ asset('landing/img/banner/about-banner.jpg') }}">
    <div class="event-search-area section-padding-80">
        <div class="container">
        		<h2 class='text-center' style="color:blue; font-family: Arial, 'My-raid pro'";>Package Details</h2>
        		<div class='row'>
	        		<div class='col-3'>
	        			<a href="{{route('buy_package',$selected_package->package_key)}}" class='btn btn-success'>Buy This Package</a>
	        		</div>
	        		<div class='col-9 shaded-box'>
	        			
	        			<p>Package Name:<span><b> {{$selected_package->package_name}}</b></span></p>
	        			<p>Package Type: <span>{{($selected_package->special_package=='yes')?' Special Package':' Regular Package'}}</span></p> 
	        			<div class='row lr-padding-0'>
		        			<div class='col-3'>
		        				<p>Highlighted Features:</p>
		        			</div>
		        			<div class='col-9'>
			        			<ul>
			        				<li>1.<span> {{$selected_package->package_feature1}}</span></li>
			        				<li>2.<span> {{$selected_package->package_feature1}}</span></li>
			        				<li>3.<span> {{$selected_package->package_feature3}}</span></li>
			        			</ul>
		        			</div>
	        			</div>
	        			<p>Package Price:<span style='color:gold;'> {{$selected_package->package_price}}</span><span> per {{$selected_package->price_per}}</span></p>
	        			@if(isset($selected_package->description) && !empty($selected_package->description))
		        			<div class='col-3 lr-padding-0'>
		        				<p>Description:</p>
		        			</div>
		        			<div class='col-9'>
		        				<p>{!! $selected_package->description !!}</p>
		        			</div>
	        			@endif
	        		</div>
        		</div>

        </div>
    </div>
@endsection