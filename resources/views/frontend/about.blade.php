@extends('layouts.index')
@section('main-content')
 <!-- Breadcrumbs -->
  
 <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="{{route('fronthome')}}">Home</a><span>&raquo;</span></li>
            <li><strong>About Us</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  
  <div class="main container">
 
     <div class="about-page">
        <div class="col-xs-12 col-sm-6"> 
          
          <h1>Welcome to <span class="text_color">Aafnai Deal</span></h1><br>
          <p>I find immense pleasure to introduce Aafnai Deal Online Shopping Center (P). Ltd. as an established for Mass Communication, Selling Goods, Selling Products, Booking all types of services, Internet, mobile & Computers Hardware solutions brand in Nepal operating under the flagship of GSN. 
          </p>
          <p>With our services being rendered to various sectors viz: businesses, NGO's, INGO's, Government, multilateral Organizations, etc from over a decade. we provide services that are compatible with latest design, technology, trends, Latest System & Latest Products and aim to develop new opportunities on the web, mobiles, Software, Online shopping & Computers Hardware continuously.
            GSN is primarily, software and consulting company that works in local as well as International markets and commands clientele from five continents Since 14 (yrs).</p>
          <p>Aafnai Deal Online Shopping Center Motive is to bring together each and every businesses (Small & Huge) , buyers, Sellers, Students, House Wife under a roof. Aafnai Deal Online Shopping Center is the connector between buyers and sellers directly.
            We mainly focus on Mass Communication, Network Marketing, Digital Marketing, Business Marketing, Business Advertisement, Business Tie-up, E-mail Marketing, Business Promotion, etc.   
          </p>
          <h2><span class="text_color text-center">Misson</span></h2>
          <p>"To make it easy to do Selling & Purchasing anywhere at any time bringing almost 500 types of businesses together through our Nepal with very good Communication and 24/7/365 days support."</p>
         
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="single-img-add sidebar-add-slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="frontend/images/about_us_slide1.jpg" alt="slide1"> </div>
                <div class="item"> <img src="frontend/images/about_us_slide2.jpg" alt="slide2"> </div>
                <div class="item"> <img src="frontend/images/about_us_slide3.jpg" alt="slide3"> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xs-0">
        </div>
        <div class="col-sm-6 col-xs-12">
         <br>
          <h2><span class="text_color text-center">Vision</span></h2>
          <p>"We will make all types of businesses in Nepal becomes digital."</p>
        </div>
      </div>

  </div>
  <!-- Section: services -->
  <section id="service" class="text-center"> 
    
    <div class="container">
     
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="icon-diamond icons"></i> </div>
              <div class="service-desc">
                <h4>Web Development</h4>
                <p>We Provide Better Quality Websites For Your Business or Personal Growth With Effective Price. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="icon-settings icons"></i> </div>
              <div class="service-desc">
                <h4>Web Hosting</h4>
                <p>We Don't Just Make Websites We Also Provide Hosting Service to Customers.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="icon-camera icons"></i> </div>
              <div class="service-desc">
                <h4>Photography</h4>
                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInRight" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="icon-magnifier-add icons"></i> </div>
              <div class="service-desc">
                <h4>SEO</h4>
                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: services --> 
  <div class="our-team"> 

    <div class="container"> <div class="page-header">
        <h2>Our Team</h2>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.2s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="images/team-img01.jpg" alt="Manish Sharma" class="img-responsive" /></div>
                <h5>Manish Sharma</h5>
                <p class="subtitle">Managing Director</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.5s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="images/team-img02.jpg" alt="HTML template" class="img-responsive" /></div>
                <h5>Josefine</h5>
                <p class="subtitle">Team Leader</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.8s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="images/team-img03.jpg" alt="HTML template" class="img-responsive" /></div>
                <h5>Paulo Moreira</h5>
                <p class="subtitle">Senior Web Developer</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="1s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="images/team-img04.jpg" alt="HTML template" class="img-responsive" /></div>
                <h5>Tom Joana</h5>
                <p class="subtitle">Digital Creative Director</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
@endsection