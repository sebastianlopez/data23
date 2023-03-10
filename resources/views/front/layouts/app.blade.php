<!DOCTYPE html>
<html lang="es-ES">
<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PVJNVD8TVN"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PVJNVD8TVN');
    </script>

    @include('front.includes.tags')


</head>
<body>

<div class="wrapperc @yield('main_bg')">

    @include('front.includes.navbar')

    @yield('content')

    @include('front.includes.footer')
</div>

    @include('front.includes.modals.modals2')
    @include('front.includes.modals.modalVideo')
    @include('front.includes.modals.modal_email')



    <!-- RDStation -->
    <script type="text/javascript" defer src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/bdf94fe1-12bd-4f35-8989-1a189152cb58-loader.js?v=6326" ></script>

    <script src="{{asset('front/js/helper.js?v=6326')}}"></script>

    <script src="{{asset('front/js/main.home.js?v=6326')}}" defer></script>
    <script src="{{asset('front/js/create-demo.home.js?v=6326')}}" defer></script>
    <script src="{{asset('front/js/yosemodal.min.js?v=6326')}}" defer></script>

    
    <!-- 
    <script src="https://www.google.com/recaptcha/api.js?v=6326" async></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdGdPkaAAAAAICNuY4FEbRr0tAkDg9I_CgSI3Cf" async></script> -->

    <!-- Whatsapp -->
    <script>window.datacrm_whatsapp_config ={"mobile":"573014765478","redirect_chat_whatsapp":"true","empresa":"https://www.datacrm.la/datacrm/datacrm/webservice.php"}</script>  

    <script src="https://integraciones.datacrm.la/datacrm/whatsapp_button/wpp_button.min.js?v=6326" defer></script>

    <script src="{{asset('front/js/plans.home.js?v=6326')}}" defer></script>
    <script src="{{asset('front/js/modification.home.js?v=6326')}}" defer></script>

    @yield('js')

</body>
</html>
