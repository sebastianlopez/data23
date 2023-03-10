<div class="myDivBlue1 myDivDiagonalLeftA">
    <div class="container  mt-4  myDivDiagonalLeftB" id="myHomeSeccion3a">
        
        <div class="row section-resize section-init-index" >
            <div class="col-lg-6 col-md-6 col-12  order-2 order-sm-1 mt-5 ">      
                
                <h2 class="text-uppercase myTitleGreen1 mt-3 typ-montserrat br-wd ft-h2">
                            {!! $site['p2_home_seccion3_title'] ?? '' !!} 
                </h2>
                
                <p class="typ-os-regular typ-montserrat f-sz-m mt-3">
                        {!! $site['p2_home_seccion3_texto1'] ?? '' !!} 
                </p>    
                
                <p class="typ-os-regular  typ-montserrat f-sz-m  mt-4 mb-5">
                        {!! $site['p2_home_seccion3_texto2'] ?? '' !!} 
                </p>       
                
                @if(Route::is('functions') )
                <div class="container mt-4 mb-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12 mt-5">
                            <button class="modalPruebaGratis text-uppercase typ-montserrat p-2 f-sz-sm btn btn-orange effect-zoom" data-toggle="modal" data-target="#modalPruebaGratis">
                                <b>{{$site['software2_btn'] ?? ''}}</b>
                            </button>
                        </div>
                    </div>
                </div>
                @endif

            </div>
          
            <div class="col-lg-6 col-md-6 col-12 order-1 order-sm-2 text-center" >
                <picture>
                    <source type="image/webp" srcset="{{asset('front/images/home03_512x464.webp')}}">
                    <img src="{{asset('front/images/home03_512x464.png')}}" alt="{{ chstr($site['p2_home_seccion3_texto2']) }}"  class="img-fluid">
                </picture>
                <br>
                <br>
            </div>
            
        </div>

    </div>
</div>