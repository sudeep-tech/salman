@extends('layouts.landing_layout')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<script src="{{ asset('js/jquery.min.js') }}"></script>
<style>
.payment-method:hover{
	border-color: red;
	border-width: 4px;
	border-radius: 15px;
	outline: none !important;
}
.bs-example{
	margin: 20px;
	margin:auto;
}
.nav-link .active{
	background-color: blue;
}
.shaded_payment_box{
	box-shadow: 1px 1px 1px 1px skyblue;
}
</style>
<script>
    $(".nav-tabs a.nav-link").click(function(){
	var x = $(this).attr("href");
	x = x.replace("#", "");
	$(".tab-content .tab-pane").each(function(){
		var y = $(this).attr("id");
		if (x == y) $(this).addClass("active show");
		else $(this).removeClass("active show");
	});
});
</script>

<img src="{{asset('landing/img/banner/about-banner.jpg')}}">
<div class="event-search-area section-padding-80">
    <div class="container">


			
		<div class="bs-example">
			<ul class="nav nav-tabs" id="myTab">
				<li class="nav-item">
					<a href="#cash_on_hand" class="nav-link active payment-method" data-toggle="tab"><img src="{{asset('landing/img/cash-on-hand.png')}}" class='img img-responsive' width="50px" height="50px"></a>
				</li>
				<li class="nav-item ">
					<a href="#bank_transfer" class="nav-link payment-method" data-toggle="tab"><img src="{{asset('landing/img/bank-transfer-icon.png')}}" class='img img-responsive' width="50px" height="50px"></a>
				</li>

				<li class="nav-item">
					<a href="#esewa_pay" class="nav-link payment-method" data-toggle="tab"><img src="{{asset('landing/img/esewa-logo.jpg')}}" class='img img-responsive' width="50px" height="50px"></a>
				</li>
				<li class="nav-item">
					<a href="#paypal" class="nav-link payment-method" data-toggle="tab"><img src="{{asset('landing/img/paypal.jpg')}}" class='img img-responsive' width="50px" height="50px"></a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in show active" id="cash_on_hand">
					<h5>Give us your contact information. We will discuss about <a href="{{route('package_detail',$package_info->id)}}" style='color:blue;'>{{$package_info->package_name}}</a> in your place Or You can directly contact us.</h5>
					
					<div class='col-sm-7'>
						<form method='post' action="{{route('submit_buy_package',$package_info->package_key)}}" class='form shaded_payment_box'>
							@csrf
							<div class='form-group row'>
								<label for="buyer_name" class='col-sm-4'>Personal/Company Name:</label>
								<div class='col-sm-8'>
									<input type="text" name="buyer_full_name" required placeholder="Enter Name Here" class='form-control'>
								</div>
							</div>
							<div class='form-group row'>
								<label for="buyer_phone" class='col-sm-4'>Phone:</label>
								<div class='col-sm-8'>
									<input type="text" name="buyer_phone" required placeholder="Your Phone Number" class='form-control'>
								</div>
							</div>
							<div class='form-group row'>
								<label for="buyer_email" class='col-sm-4'>Email:</label>
								<div class='col-sm-8'>
									<input type="text" name="buyer_email" placeholder="Your E-mail" class='form-control'>
								</div>
							</div>
							<div class='form-group row'>
								<label for="buyer_message" class='col-sm-4'>Your Message:</label>
								<div class='col-sm-8'>
									<textarea name="buyer_message" rows="5" type="text" placeholder="Your message" class='form-control'></textarea>
								</div>
							</div>
							<input type='text' hidden name='package_id' value="{{$package_info->id}}">
							<input type='text' hidden name='payment_method' value="cash_on_hand">
							<input type='text' hidden name='status' value='active'>
							<div class='form-group row'>
								<label for="" class='col-sm-4'></label>
								<div class='col-sm-8'>
									<input type="submit" name='btn_cash_on_hand' class='btn btn-success form-control'>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="tab-pane fade" id="bank_transfer">
					<div class='col-sm-7 shaded_payment_box'>
						<h3 class='text-center'>Tranfer To Bank</h3>
						<p>Bank Name:<span>Nic Asia Bank</span></p>
						<p>Branch:<span>Teku Branch</span></p>
						<p>Account No.:<span><number>Test-43598034980543985</number></span></p>
						<p>Account Holder:<span>Gemini Solutions Nepal Pvt. Ltd.</span></p>
							<notice>Specify Package Name in purpose of Payment</notice>
						</div>
									
				</div>
				<div class="tab-pane fade" id="esewa_pay">
					<div class='col-sm-7 shaded_payment_box'>
						<h4 class="mt-2 text-center">E-sewa Payment</h4>
						<p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
					</div>
				</div>
				<div class="tab-pane fade" id="paypal">
					<div class='col-sm-7 shaded_payment_box'>
						<h3 class="mt-2 text-center">Paypal Payment</h3>
						
						<p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>    
					</div>

				</div>

			</div>
		</div>

    </div>
</div>
@endsection