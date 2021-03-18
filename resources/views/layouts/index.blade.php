@include('frontend._section._header')
@include('frontend._section._header_menu')

@yield('main-content')

@include('frontend._section._footer_menu')

@if(Route::currentRouteName()=='quickview')
@include('frontend._section.quickview');
@endif

@include ('frontend._section._footer')