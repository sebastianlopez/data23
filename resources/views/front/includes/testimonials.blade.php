<div class="container pt-5"  id="myTestimonialsSeccion">
<div class="row justify-content-center section-resize">
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            margin: 0,
            center: false,
            nav: true,
            navText : ['<i class="fa-solid fa-chevron-left"></i>','<i class="fa-solid fa-chevron-right"></i>'],
            loop: true,
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:2
                }
                ,
                1200:{
                    items:3
                }
            }                
        });
    });
</script>

<?php
    $testimonial[] = array( 'empresa' => 'Informese', 
                            'imagenWebp' => 'banner1_logo1_121x60.webp', 
                            'imagenPng' => 'banner1_logo1_121x60.png');

    $testimonial[] = array( 'empresa' => 'radiopolis', 
                            'imagenWebp' => 'banner1_logo2_113x60.webp', 
                            'imagenPng' => 'banner1_logo2_113x60.png');        
                            
    $testimonial[] = array( 'empresa' => 'UDCA', 
                            'imagenWebp' => 'banner1_logo_udca113x56.webp', 
                            'imagenPng' => 'banner1_logo_udca113x56.png');      
                  
    $testimonial[] = array( 'empresa' => 'Toxement', 
                            'imagenWebp' => 'toxement.webp', 
                            'imagenPng' => 'toxement.png');     

    $testimonial[] = array( 'empresa' => 'Soliplast', 
                            'imagenWebp' => 'soliplast.webp', 
                            'imagenPng' => 'soliplast.png'); 

    $testimonial[] = array( 'empresa' => 'Montajes y procesos', 
                            'imagenWebp' => 'montajes_y_procesos.webp', 
                            'imagenPng' => 'montajes_y_procesos.png');                             

    $testimonial[] = array( 'empresa' => 'Merquellantas', 
                            'imagenWebp' => 'merquellantas.webp', 
                            'imagenPng' => 'merquellantas.png');                             

    $testimonial[] = array( 'empresa' => 'E y C Ingenieros', 
                            'imagenWebp' => 'E_y_C_ingenieros.webp', 
                            'imagenPng' => 'E_y_C_ingenieros.png');    

    $testimonial[] = array( 'empresa' => 'E y C Eukaris', 
                            'imagenWebp' => 'eukaris.webp', 
                            'imagenPng' => 'eukaris.png');

    $testimonial[] = array( 'empresa' => 'Domat', 
                            'imagenWebp' => 'domat.webp', 
                            'imagenPng' => 'domat.png');    
                            
    $testimonial[] = array( 'empresa' => 'Link Trade', 
                            'imagenWebp' => 'link_trade.webp', 
                            'imagenPng' => 'link_trade.png');    
                            
    $testimonial[] = array( 'empresa' => 'Superbit', 
                            'imagenWebp' => 'superbid.webp', 
                            'imagenPng' => 'superbid.png');           
                            
    $testimonial[] = array( 'empresa' => 'GSH', 
                            'imagenWebp' => 'GSH.webp', 
                            'imagenPng' => 'GSH.png');       
                            
    $testimonial[] = array( 'empresa' => 'Controlfluid', 
                            'imagenWebp' => 'control_fluid500x246.webp', 
                            'imagenPng' => 'control_fluid500x246.png');     

    $testimonial[] = array( 'empresa' => 'Luna de Miel', 
                            'imagenWebp' => 'luna_de_miel.webp', 
                            'imagenPng' => 'luna_de_miel.png');          
                            
    $testimonial[] = array( 'empresa' => 'Lab. Méd.Echavarría', 
                            'imagenWebp' => 'lab_med_echavarria.webp', 
                            'imagenPng' => 'lab_med_echavarria.png');      
                            
    $testimonial[] = array( 'empresa' => 'NETDATA', 
                            'imagenWebp' => 'netdata.webp', 
                            'imagenPng' => 'netdata.png');      
                            
    $testimonial[] = array( 'empresa' => 'Americana de Trofeos', 
                            'imagenWebp' => 'banner1_logo6_335x60.webp',  
                            'imagenPng' => 'banner1_logo6_335x60.png');      
                            
    $testimonial[] = array( 'empresa' => 'Impermeabilizadora ATA', 
                            'imagenWebp' => 'impermeabilizadora_ata.webp', 
                            'imagenPng' => 'impermeabilizadora_ata.png');   
                            
    $testimonial[] = array( 'empresa' => 'La Vita', 
                            'imagenWebp' => 'LaVitaLogo_142x60.webp', 
                            'imagenPng' => 'LaVitaLogo_142x60.png');                              
    
    $cuenta = 0;
?>

<div class="col-12 text-center">
    <h2 class="text-uppercase mt-3 typ-montserrat  br-wd myTitleBlue ft-h2 ">
        {!! $site['p2_home_seccion10_title1'] ?? '' !!}
    </h2>
        
    <div class="owl-carousel owl-theme mt-5 center-img" align="center" >
            @foreach ($testimonial as $tes) 
                @php 
                    $cuenta++;
                @endphp
                <div class="item owl-testimonials-item" style="height: 30rem">

                    <div class="item-owl-own ">
                        <div class="">
                            <picture>
                                <source type="image/webp" srcset="{{asset('front/images/home/' . $tes['imagenWebp'])}}">
                                <img src="{{asset('front/images/home/'.$tes['imagenPng'])}}" alt="{{ $tes['empresa'] }}" width="121" height="60" class="my-2 lazyload img-fluid center-img">
                            </picture>
                        </div>
                        <div class="owl-testimonials-text" style="height: 60%" >
                            <p class="txt-gray typ-os-regular mt-4 text-left ">
                                {!! $site['p2_home_seccion10_testimonanialtext' .$cuenta] ?? '' !!}
                            </p>
                        </div>
                        <div class="text-right">
                            <p>
                                {!! $site['p2_home_seccion10_testimonanialpersona' .$cuenta] ?? '' !!}
                            </p>
                        </div>
                    </div>
                </div>             
        @endforeach

    </div>

        
</div>
<div class="col-lg-5 col-md-5 col-12 mt-4 text-center" >
    <a href="https://www.youtube.com/watch?v=cUdjkC3ttwc&list=PLZoqtUmy_3owJFjAsUAvyWIlwww-HsPWp&index=10" target="_blank" class="typ-montserrat txt-orange btn p-2  f-sz-m myBtnOrangeOutline effect-zoom br-wd">
        <b>{!! $site['p2_home_seccion10_btntext1'] ?? '' !!} 
            <i class="fa-brands fa-youtube f-sz-m"></i>
        </b>
    </a>
</div>
</div>
</div>