@include('admin._section._header')
@include('admin._section._header_menu')
@include('admin._section.notification')
    @yield('main-content')
<style>
    a:hover{
        text-decoration:none;
    }
</style>

<center><p>Copyright © All Rights Reserved {{ (date('Y')=='2015')?'2015':'2015-'.date('Y') }} Aafnai Deal Online Shopping Center Pvt. Ltd.</p>

<div class="single-welcome-slide bg-img"  style="background-color:#343a40; height:50px; !important; text-shadow:2px 1px 2px 1px blue;">
    <p style="color:white; padding-top:6px;">Powered By: <a href="http://itsyshost.com" style="color:violet;">Gemini Solutions Nepal</a></p></center>
</div>
   @include('admin._section._footer')