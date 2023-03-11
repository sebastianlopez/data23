<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="icon" href="{{ asset('front/images/favicon.ico') }}">
<title>@yield('title_meta') - DataCRM</title>
<meta name="description" content="@yield('description_meta')">

@yield('meta_og')

<link href="{{asset('css/front-style.min.css')}}" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"/> 
<noscript><link rel="stylesheet" href="{{asset('css/front-style.min.css')}}"></noscript>

<script src="{{asset('front/js/jquery.min.js')}}"></script>  
<script src="{{asset('front/js/popper.min.1.11.0.js')}}"></script>     
<script src="{{asset('front/plugins/vendors/bootstrap.min.js')}}"></script>  
<script src="{{asset('front/plugins/all-functions.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.js?v=6326')}}" defer></script>
<script src="{{asset('front/js/cookies.js?v=6326')}}" defer></script>
<script src="{{asset('front/js/lazyload.min.js?v=6326')}}" defer></script>

@yield('styles_per')
