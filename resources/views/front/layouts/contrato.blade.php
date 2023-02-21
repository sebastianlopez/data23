<!DOCTYPE html>
<html lang="es-ES">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5XQDG6G');</script>
<!-- End Google Tag Manager -->
    @include('front.includes.tags')
    <script src="{{asset('front/js/jquery.min.js?v=6326')}}"></script>
	<script src="{{asset('front/js/cookies.js?v=6326')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js?v=6326" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- RDStation -->
    <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/bdf94fe1-12bd-4f35-8989-1a189152cb58-loader.js" ></script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XQDG6G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapperc">
    @include('front.includes.navbar')
    @yield('content')
    @include('front.includes.footer')
    @include('front.includes.modals')
    @include('front.includes.modal_email')

    <script src="{{asset('front/js/global.min.js')}}"></script>
    <script src="{{asset('front/js/main.js?v=63213')}}"></script>
<script>
    window.intercomSettings = {
        app_id: "pnmeknwf"
    };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/pnmeknwf';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
</script>    
@yield('js')
</div>
</body>
</html>
