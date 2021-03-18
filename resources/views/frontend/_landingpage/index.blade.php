@extends('layouts.landing_home_layout')
@section('main-content') 
<style>
	.banner_height{
		height:350px !important;
		margin:0px;
		padding:0px;
	}
</style>

  <!-- Welcome Area Start -->

  <section class="welcome-area">

        <div class="welcome-slides owl-carousel">

			<!-- Single Welcome Slide -->
			
            <div class="single-welcome-slide bg-img banner_height"  style="background-image: url( {{ asset('landing/img/banner/landing_banner-1.jpg')}});">

            </div>



            <!-- Single Welcome Slide -->

            <div class="single-welcome-slide bg-img banner_height" style="background-image: url( {{ asset('landing/img/banner/landing_banner-2.jpg') }});">

                <!-- Welcome Content -->

            </div>



            <!-- Single Welcome Slide -->

            <div class="single-welcome-slide bg-img banner_height" style="background-image: url( {{ asset('landing/img/banner/banner-1.jpg') }} );">
			<!-- bg-overlay -->
            
            </div>



            <!-- Single Welcome Slide -->

            <div class="single-welcome-slide bg-img banner_height" style="background-image: url( {{ asset('landing/img/bg-img/33.jpg') }});">

            </div>

        </div>
    </section>
<!-- Welcome Area End -->


<!--Clients Area Start -->
<section class="razo-weekly-schedule-area">
	<!--  section-padding-80-0  -->
	<div class="container-fluid">

		<div class="row">

			<div class="col-12">

				<div class="weekly-schedule-table table-responsive">

					<!-- Section Heading -->

					<div class="col-12">

						<div class="section-heading text-center">

							@if($results_array)
							<h2 class="font-weight-light" style="text-decoration:underline;" >Our Top Clients</h2>

							<div class="row mx-auto my-auto" style="padding-top:30px;">

								<div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">

									<div class="carousel-inner w-100" role="listbox">

										<div class="carousel-item active">

											<div class="col-lg-2 col-md-3">

												<img class="img-fluid" src="landing/img/clients-logo/{{$results_array[0]}}">

											</div>

										</div>

										@for($i=1;$i<count($results_array);$i++)

										<div class="carousel-item">

											<div class="col-lg-2 col-md-3">

												<img class="img-fluid" src="landing/img/clients-logo/{{$results_array[$i]}}">

											</div>

										</div>
										@endfor

									</div>

									<!-- <a class="carousel-control-prev bg-dark w-auto" href="#recipeCarousel" role="button" data-slide="prev">

										<span class="carousel-control-prev-icon" aria-hidden="true"></span>

										<span class="sr-only">Previous</span>

									</a>

									<a class="carousel-control-next bg-dark w-auto" href="#recipeCarousel" role="button" data-slide="next">

										<span class="carousel-control-next-icon" aria-hidden="true"></span>

										<span class="sr-only">Next</span>

									</a> -->

								</div>

							</div>

							@endif


						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- Clients Area End -->


@endsection