@include('admin._section._header')
@guest
@include('admin._section._header_menu')
@else
@include('admin._section._vendor_header_menu')
@endguest
@include('admin._section.notification')
	@yield('main-content')

   @include('admin._section._footer_menu')
   
   @include('admin._section._footer')