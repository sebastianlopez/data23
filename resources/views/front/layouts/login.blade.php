<!DOCTYPE html>
<html lang="es-ES">
<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5XQDG6G');
    </script>
    <!-- End Google Tag Manager -->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/cookies.js?v=6326')}}"></script>
    <script src="{{asset('front/js/helper.js?v=6326')}}"></script>
    @include('front.includes.tags')


    <script src="{{asset('front/js/jquery.min.js')}}"></script>   
</head>
<div class="wrapperc @yield('main_bg')">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XQDG6G"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @include('front.includes.navbar')

    @yield('content')>


<script src="{{asset('front/js/global.min.js?v=6326')}}"></script>

<!-- ajustes de componete main.js a main.login.datacrm.js -->

<!-- <script src="{{asset('front/js/main.js?v=63213')}}"></script> -->
<script src="{{asset('front/js/main.login.DataCRM.js')}}"></script>

<script src="{{asset('front/js/login.js')}}"></script>

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
