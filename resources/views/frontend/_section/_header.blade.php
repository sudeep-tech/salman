<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ config('app.name', 'Aafnaideal.com') }}

        {{ isset($_title) ? '|| '.@$_title : "" }}</title>
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!-- 
<meta name="description" content="best template, template free, responsive Template, fashion store, responsive Template, responsive html Template, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive Template, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/> -->
 <!-- CSRF Token -->

 <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <meta name="keywords" content="{{ isset($seo['keywords']) ? $seo['keywords'] : __('seo.META_KEYWORDS') }}">
    <meta name="description" content="{{ isset($seo['description']) ? $seo['description'] : __('seo.META_DESCRIPTION') }}">
    <!-- Facebook share meta tags -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ isset($_title) ? $_title : config('app.name', 'Afnaideal.com') }}">
    <meta property="og:image" content= {{ isset($seo['og_image']) ? $seo['og_image'] : asset('images/ico/afnaideal_logo.png') }}>
    <meta property="og:description" content="{{ isset($seo['og_description']) ? $seo['og_description'] : '' }}">

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicons Icon -->
<!-- <link rel="shortcut icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/> -->
 <!-- Favicon -->
 <link rel="icon" href="{{ asset('landing/img/core-img/fav-icon.png')}}">
<!-- CSS Style -->
<!--===============================================================================================-->
<link rel="stylesheet" href="{{ asset('frontend/style.css') }}">

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->

<style>
#invalid-feedback{
        color:red;
        font-size:12px;
}
</style>
<!--===============================================================================================-->

</head>

