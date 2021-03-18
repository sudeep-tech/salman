<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Favicon -->
	<link rel="icon" href="{{ asset('landing/img/core-img/fav-icon.png')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <title>
        {{ config('app.name', 'Aafnaideal.com') }}

        {{ isset($_title) ? '|| '.$_title : "" }}
    </title>
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">

    <script type="text/javascript" src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
	<link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css') }}" />
	<script type="text/javascript" src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js') }}"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{route('admin-dashboard')  }}" class="site_title"><i class="fa fa-paw"></i>
                            <span>Admin
                                Panel</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ Auth::user()->name}}</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{ route('banner-list') }}"><i class="fa fa-image"></i> Banners <span
                                            class="fa fa-chevron-right"></span></a>
                                </li>
                                <li><a href="{{ route('business-type-list') }}"><i class="fa fa-briefcase"></i> Business Types <span
                                            class="fa fa-chevron-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('category-list') }}"><i class="fa fa-sitemap"></i> Categories <span
                                            class="fa fa-chevron-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('product-list') }}"><i class="fa fa-shopping-basket"></i> Products <span
                                            class="fa fa-chevron-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{route('admin-order-list')}}"><i class="fa fa-shopping-cart"></i> Orders <span
                                            class="fa fa-chevron-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('user-list') }}"><i class="fa fa-users"></i> Users <span
                                            class="fa fa-chevron-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('customer-detail-list') }}"><i class="fa fa-users"></i> Customer Detail <span
                                            class="fa fa-chevron-right"></span></a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('account-creator-list') }}"><i class="fa fa-users"></i> Account Creator <span
                                            class="fa fa-chevron-right"></span></a>
                                </li>
                                <li>
                                    <a href="{{ route('admin-company-data-list') }}"><i class="fa fa-users"></i>Company Data <span
                                            class="fa fa-chevron-right"></span></a>
                                </li>
                                
                                <li>
                                    <a href="{{route('public-contact-list')}}"><i class='fa fa-phone'></i>Public Contacts<span class='fa fa-chevron-right'></span></a>
                                </li>
                                <li>
                                    <a href="{{route('package-list')}}"><i class='fa fa-archive'></i>Packages<span class='fa fa-chevron-right'></span></a>
                                </li>
                                <li>
                                    <a href="{{route('subscriber-list')}}"><i class='fa fa-envelope'></i>Customer Subscribers<span class='fa fa-chevron-right'></span></a>
                                </li>
                                <li>
                                    <a href="{{route('vendor-subscriber-list')}}"><i class='fa fa-envelope'></i>Vendor Subscribers<span class='fa fa-chevron-right'></span></a>
                                </li>
                                <li>
                                    <a href="{{route('vendor-feedback-list')}}"><i class='fa fa-envelope'></i>Vendor Feedbacks<span class='fa fa-chevron-right'></span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ Auth::user()->name}}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="{{ route('admin-logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                        <form id="logout-form" action="{{ route('admin-logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    @include('backend.sections._notification')
                    @yield('content')
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

   

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('js/nprogress.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

	
    @yield('scripts')
</body>

</html>