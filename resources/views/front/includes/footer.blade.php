<div id="gdprbox" class="cookies-accept active">
    <picture>    
        <source type="image/webp" data-srcset="{{asset('front/images/cookie35x35.webp')}}">
        <img data-src="{{asset('front/images/cookie35x35.png')}}" 
        class="lazyload img-fluid" 
        alt="Usamos Cookies"
        width="35"
        height="35"
        >
    </picture>
    <p>Usamos <a class="btn-cookies-link" href="{{route('cookies')}}">cookies.</a></p>
    <div class="gdpr-button-accept" onclick="aceptarCookies();return false;">Ok!</div>
</div>

<footer class="home-background container-fluid">
    <div class="container">
        <div class="row m-0 pt-5 justify-content-center">
            <div class="col-lg-2 col-md-12 col-sm-6 col-12 pl-5 div-footer">
                <a href="{{route('home')}}">

                    <picture>
                        <source type="image/webp" data-srcset="{{asset('front/images/Logodata_Horizontalblanco180x58.webp')}}">
                        <img data-src="{{asset('front/images/Logodata_Horizontalblanco180x58.png')}}"  alt="Logo Data CRM" class="img-fluid w-100 img-footer-logo lazyload">
                    </picture>                    
                </a>

                <p class="typ-os-regular f-sz-s m-0 mt-4">
                    <a  href="{{route('about_us')}}"
                        class="txt-white">{{$site['site_about']?? ''}}
                    </a>                    
                </p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a  href="{{route('contact')}}" class="txt-white">{{$site['site_contact']?? ''}}
                    </a>                    
                </p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a  href="{{ route('partners') }}" class="txt-white">{{$site['site_partners']?? ''}}</a>                    
                </p>
            </div>

                 

            <div class="col-lg-2 col-md-12 col-sm-6 col-12 pl-5 pt-3 div-footer">
                <h2 class="txt-white f-sz-sm typ-montserrat">{{$site['site_product']?? ''}}</h2>
                <p class="typ-os-regular f-sz-s txt-white m-0 mt-4">
                    <a  href="{{route('sector')}}" 
                        class="txt-white">
                        CRM por Sector
                    </a>
                </p>    
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a  href="{{route('plans')}}/" 
                        class="txt-white">
                        {{$site['site_plans']?? ''}}
                    </a>                    
                </p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                  
                    <a  href="{{route('functions')}}/" 
                        class="txt-white">
                        {{$site['site_functions']?? ''}}
                    </a>                    
                </p>                    
                <p class="typ-os-regular f-sz-s txt-white m-0">
                  
                    <a  href="{{route('mobile')}}" 
                        class="txt-white">
                        {{$site['site_crmmobile']?? ''}}
                    </a>                    
                </p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a target="_blank" href="https://api.datacrm.la/?version=latest" class="txt-white">
                        {{$site['site_api']?? ''}}
                    </a></p>
            </div>
      
            <!-- Paises -->
            <div class="col-lg-2 col-md-12 col-sm-6 col-12 pl-5 pt-3 div-footer">
                <h2 class="txt-white f-sz-sm typ-montserrat">{{$site['site_countries']?? ''}}</h2>
                <p class="typ-os-regular f-sz-s txt-white m-0 mt-4">
                   
                    <a  href="{{route('Colombia')}}/"
                        class="txt-white">CRM Colombia
                    </a>                    
                </p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a href="{{route('Mexico')}}/" class="txt-white">
                        CRM M&eacute;xico
                    </a>
                </p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a href="{{route('Chile')}}/" class="txt-white">
                        CRM Chile
                    </a>
                </p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a href="{{route('Costarica')}}/" class="txt-white">
                        CRM Costa Rica
                    </a>
                </p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a href="{{route('Ecuador')}}/" class="txt-white">
                        CRM Ecuador
                    </a>
                </p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a href="{{route('Panama')}}/" class="txt-white">
                        CRM Panam&aacute;
                    </a>
                </p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a href="{{route('Peru')}}/" class="txt-white">
                        CRM Per&uacute;
                    </a>
                </p>
            </div>
            
            <!-- Capacítate -->            

            <div class="col-lg-2 col-md-12 col-sm-6 col-12 pl-5 pt-3 div-footer">
                <h2 class="txt-white f-sz-sm typ-montserrat">{{$site['site_trained']?? ''}}</h2>
                <p class="typ-os-regular f-sz-s txt-white m-0 mt-4"><a href="http://ayuda.datacrm.com/" target="_blank" class="txt-white">{{$site['site_help']?? ''}}</a></p>
                <p class="typ-os-regular f-sz-s txt-white m-0"><a href="https://www.datacrm.com/udatacrm/" target="_blank" class="txt-white">{{$site['site_unidata']?? ''}}</a></p>
                <p class="typ-os-regular f-sz-s txt-white m-0">
                    <a  target="_blank" 
                        href="{{route('blog')}}/" 
                        class="txt-white">{{$site['site_blog']?? ''}}
                    </a>
                </p>
            </div>

            <!-- site_apps -->

		    <div class="col-lg-4 col-md-12 col-sm-6 col-12 pl-5 pt-3 div-footer">
                <h1 class="txt-white typ-montserrat" style="font-size: 1.20rem;">{{$site['site_apps']?? ''}}</h1>
                <div class="row justify-content-start">
                <div class="col-12 col-xl-5">
                    <a href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8" target="_blank">
                        <picture>
                            <source type="image/webp" data-srcset="{{asset('front/images/home/app_store_125x37.webp')}}">
                            <img data-src="{{asset('front/images/home/app_store_125x37.png')}}" 
                                alt="Apple Store" 
                                width="125" 
                                height="37"
                                class="effect-zoom mr-md-2 my-1 lazyload">
                        </picture>
                    </a>
                </div>
                <div style="margin-top: 5px;" class="col-12 col-xl-5">
                    <a href="https://play.google.com/store/apps/details?id=com.datacrm.application" target="_blank">
                        <picture>
                            <source type="image/webp" data-srcset="{{asset('front/images/home/play_store_125x37.webp')}}">
                            <img data-src="{{asset('front/images/home/play_store_125x37.png')}}" 
                                alt="Play Store" 
                                width="125" 
                                height="37"
                                class="effect-zoom lazyload">
                        </picture>
                    </a>
                </div>
                </div>
            </div>
            <div class="col-12 my-2">
                <hr class="bg-hr-typea">
            </div>
        </div>
        <div class="row">
            <div class="col-2 my-4">
                <picture>
                    <source type="image/webp" data-srcset="{{asset('front/images/Logodata_Horizontalblanco180x58.webp')}}">
                    <img data-src="{{asset('front/images/Logodata_Horizontalblanco180x58.png')}}" alt="Logo Data CRM" width="180" height="54" class="img-fluid w-100 img-footer-logo lazyload">
                </picture>    
            </div>
            <div class="col-7 my-4">               
                <span class="txt-white f-sz-sx typ-os-regular"> {{$site['site_bottom1']?? ''}}</span> 
                <span class="txt-greenblue f-sz-sx">/</span> 
                <a href="{{route('politicas')}}" class="txt-white f-sz-s typ-os-regular">
                    {{$site['site_bottom2']?? ''}}
                </a> 
                <span class="txt-greenblue f-sz-sx">/</span> 
                <a href="{{route('terminos').'/'}}" class="txt-white f-sz-s typ-os-regular">
                    {{$site['site_bottom3']?? ''}}
                </a> 
                <span class="txt-greenbluef-sz-sx">/</span> 
                <a href="{{route('ans')}}" class="txt-white f-sz-s typ-os-regular"> ANS </a>
            </div>
            <div class="col-3 my-4" >           
                <div>
                    <a href="https://www.facebook.com/DataCRM.Soluciones/" target="_blank">
                        <i class="fa-brands fa-facebook mySocialMediaIcon"></i>
                    </a>
                        <a href="https://api.whatsapp.com/send?phone=573014765478&data=AbvFn1vbKjaL01ZOTTkiC3OON5BDEjVEOXTaVVl0esD2yI1M65Jhupigkb5DKBTvi0JwPKf1CY8cei_XrpKruFQD3RcrHuvUvEZ3DrwGJgOREHExVL2-sKauwzkdTJGVxJQ&source=FB_Ads">
                        <i class="fa-brands fa-instagram mySocialMediaIcon"></i>  
                    </a>        
                    <a href="https://www.linkedin.com/company/datacrm/" target="_blank">
                        <i class="fa-brands fa-linkedin mySocialMediaIcon"></i>                      
                    </a>                                 
                    <a href="https://www.youtube.com/channel/UClTE-HkTpHMkoCvcP-6i2Sw/" target="_blank">
                        <i class="fa-brands fa-youtube mySocialMediaIcon"></i>  
                    </a>
 
                </div>                                    
            </div>            
        </div>
    </div>
</footer>
