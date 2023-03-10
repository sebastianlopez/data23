<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="icon" href="{{ asset('front/images/favicon.ico') }}">
<title>@yield('title_meta') - DataCRM</title>
<meta name="description" content="@yield('description_meta')">

@yield('meta_og')

<link href="{{asset('css/front-style.min.css')}}" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"/> 
<noscript><link rel="stylesheet" href="{{asset('css/front-style.min.css')}}"></noscript>

@yield('styles_per')
