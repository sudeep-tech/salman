@include('admin._section._header')
@include('admin._section._vendor_header_menu')
@include('admin._section.notification')
@php
   $inactive_account= Session::get('inactive_account');
@endphp
@if(isset($inactive_account) && $inactive_account==true)
<h4 class='alert alert-info text-center' style="margin:0px !important;">{{Session::get('continue_message')}}</h4>
@endif
@yield('main-content')

@include('admin._section._footer_menu')

@yield('scripts')

@include('admin._section._footer')



   