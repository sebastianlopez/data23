<style>
.grecaptcha-badge {
    visibility: hidden !important;
}
</style>
<div    
    class="modal fade" id="modalPruebaGratis"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-5" style="display: block;" id="modalcontent1">
            <a type="button" class="btn btn-white btn-close btn-close-white" aria-label="Close" data-dismiss="modal"><i class="fa fa-close"></i></a>
            <h2 class="text-uppercase text-center m-0 txt-blackgray typ-montserrat f-sz-b">
                {!! $site['modal_title'] ?? '' !!}
            </h2>
            <form   id="popup_1" 
                    class='modalDemo' 
                    action="{{route('find-demo')}}" 
                    method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="{{@$reg['gclid']}}" name="ad_gclib" id="ad_gclib">
                <div class="alert alert-danger hide" id="errorsFormDemo">
                    <ul>

                    </ul>
                </div>
                <div class="row justify-content-center mt-3">
                    <!-- email -->
                    <div class="col-12 col-md-10">
                        <div class="form-group">
                            <label class ="typ-os-regular mb-0 f-sz-s" for="email">
                                <p class="mb-0">
                                    {!! $site['modal_email'] ?? '' !!}
                                </p>
                            </label>
                            <input 
                                type="text" 
                                name="email" 
                                value="" 
                                id="email" 
                                class="text-center typ-os-regular txt-gray  f-sz-s form-control">
                        </div>
                    </div>
                    <!-- sector -->
                    <div class="col-12 col-md-10" align="left">
                        <div class="form-group">
                            <label class ="typ-os-regular mb-0 f-sz-s" for="sector">
                                <p class="mb-0">
                                {!! $site['modal_sectortxt'] ?? '' !!}
                                </p>
                            </label>
                            <select name="sector" 
                                    id="sector" 
                                    style="text-align-last:center;height: 85%;background-color: white;" 
                                    class="text-left typ-os-regular txt-gray f-sz-s form-control">
                                <option class ="text-left f-sz-s" value="">{!! $site['modal_sectortxt'] ?? '' !!}</option>
                                @for($i=1;$i<13;$i++)  
                                    <option class="text-left f-sz-s" 
                                            value="{{$site['modal_sector' .$i] ?? ''}}">
                                        {!! $site['modal_sector'. $i] ?? '' !!}
                                    </option>
                                @endfor                             
                            </select>
                        </div>
                    </div>
                    <!-- compañia -->
                    <div class="col-12 col-md-10" align="left">
                        <div class="form-group">
                            <label class="mb-0">
                                <p class="mb-0 f-sz-s">
                                {!! $site['modal_company'] ?? '' !!}
                                </p>
                            </label>
                            <input 
                                type="text" 
                                name="company" 
                                value="" 
                                id="company" 
                                class="text-center typ-os-regular txt-gray f-sz-s pt-0 form-control" 
                                maxlength="40" 
                                onkeyup="countChars(this);">
                            <!-- 40 catacteres disponibles -->
                            <label  id="charNum" 
                                    class="typ-os-regular txt-blackgray text-right f-sz-s" 
                                    for ="company"
                                    >
                                    <p>
                                        {!! $site['modal_characters'] ?? '' !!}
                                    </p>
                            </label>
                        </div>
                    </div>
                    <!-- operación aritmetica -->
                    @php
                        $numberOne = mt_rand(1, 9);
                        $numberTwo = mt_rand(1, 9);
                    @endphp
                    <div class="col-12 col-md-10" align="left">
                    <div class="form-group">
                        <label  class="mb-0"
                                for="captcha">
                            <p class="mb-0 f-sz-s">
                            {!! $site['modal_operaciontxt'] ?? '' !!} {{$numberOne}} + {{$numberTwo}}
                            </p>
                        </label>
                        <input class="form-control" type="hidden" id="captchaNumberOne" name="captchaNumberOne" value="{{$numberOne}}">
                        <input class="form-control" type="hidden" id="captchaNumberTwo" name="captchaNumberTwo" value="{{$numberTwo}}">
                        <!-- resuelve operacion matematica xxxx-->
                        <input 
                            type="text" 
                            name="captcha" 
                            value="" 
                            id="captcha" 
                            data-toggle="tooltip" 
                            title="¿Permisos para sub"
                            class="text-center typ-os-regular txt-gray f-sz-s pt-0 form-control" 
                            maxlength="40">
                    </div>                    
                    </div>
                    <img id="gif_loader" data-src="{{asset('front/images/owl-carousel/ajax-loader.gif')}}" class="lazyload">
                            
                    <div class="col-12 col-md-10"  align="center">
                        <!-- Boton comencemos -->
                        <button type="submit" 
                                class="btn 
                                    
                                    p-2 
                                    text-uppercase 
                                    typ-os-regular 
                                    f-sz-sm 
                                    mt-3 
                                    btn-greenblue
                                    effect-zoom
                                    form-control
                                    ">
                            <b>{!! $site['modal_btn'] ?? '' !!}</b>
                        </button>
                    </div>
                    <div class="col-12 col-md-10 mt-4">   
                        <p class="typ-os-regular f-sz-s">
                            {{$site['site_policy_text']?? ''}}

                        <!-- Politicas de privacidad -->                             

                        <a href="{{route('politicas').'/'}}" class="txt-orange f-sz-s typ-os-regular" target="_blank">
                            {{$site['site_policy']?? ''}}
                        </a> 
                        
                            y
                                                  
                        <!-- Terminos de servicio -->  
                        <a href="{{route('terminos').'/'}}" class="txt-orange f-sz-s typ-os-regular" target="_blank">
                            {{$site['site_terminos']?? ''}}
                        </a> 
                        </p>   
                    </div>

                    <div style="margin-bottom: -2rem;" class="">
                        <!-- ¿Ya tienes una cuenta?  -->
                        <span class='typ-os-regular f-sz-s'>
                            <p>
                            {!! $site['modal_cuentatxt'] ?? '¿Ya tienes una cuenta? ' !!}
                            <!-- Inicia sesión -->
                            <a  href="https://www.datacrm.com/iniciar-sesion" 
                                target="_blank" 
                                
                                class="txt-greenblue f-sz-s"
                                > 
                                {!! $site['modal_iniciasesionxt'] ?? '' !!}
                            </a>
                            </p>
                        </span>
                    </div>
                </div>
            </form>

        </div>      
        
        <div class="modal-content p-3 myDivGray1" id="modalemail2" style="display: none;">
            <div class="myDivBlue1 myDivDiagonalLeftA" style="border-radius: 25px;">
                <div class="myDivDiagonalLeftB">
                <div id="myCircle">
                
                </div>
                <div id="myCircle1">
                
                </div>                
                <div class="modal-header">
                    <!-- Ya tienes una cuenta de DataCRM 
                        Ya tienes una cuenta en <span class="txt-greenblue">DataCRM</span><br>
                    -->
                    <h2 class="text-uppercase text-center m-0 txt-white typ-montserrat f-sz-b">
                        {!! $site['modal_tc_title'] ?? '' !!}
                        <br>
                    </h2>
                    <button type="button" class="close" style="color: white !important;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center" style="font-size:1.15em; font-weight: bold;">
                    <center>
                        <!-- INICIAR SESIÓN -->
                        <a  style="text-decoration: none; padding: 10px; font-weight: 600;font-size: 20px;color: #ffffff; background-color: #f58756; border-radius: 6px;" 
                            class="boton_personalizado" 
                            id="access_crm" 
                            target="_blank"
                            href="">{!! $site['modal_tc_btn1'] ?? '' !!}
                        </a>
                    </center>
                    <br>
                    <!-- Recupera tu contraseña Aquí -->
                    <a  href="" id="recover_password" 
                        class="text-white"
                        style="text-decoration: underline;font-size: 1.2em;" 
                        target="_blank" 
                        rel="noopener noreferrer">
                        {!! $site['modal_tc_recuperapw'] ?? '' !!}
                    </a>
                </div>
                <div class="modal-footer">
                    <div class="col-12">
                        <p class="typ-os-regular txt-white mt-4 text-center mb-0">
                            <!-- <b>He leido y estoy de acuerdo con los <a href="https://www.datacrm.com/terminos/" target="_blank" rel="noopener noreferrer">Términos y condiciones</a> y <a href="https://www.datacrm.com/politicas/" target="_blank" rel="noopener noreferrer">las Políticas de Protección de Datos</a></b> -->
                            <b>
                            {!! $site['modal_tc_policytext'] ?? '' !!}
                            <a  href="{{route('terminos')}}"  
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="txt-orange"
                                >
                                {!! $site['modal_tc_siteterminos'] ?? '' !!}
                            </a> 
                            {!! $site['modal_tc_conjuncion'] ?? '' !!} 
                            <!-- <a href="https://www.datacrm.com/politicas/" target="_blank" rel="noopener noreferrer">las Políticas de Protección de Datos</a></b>                         -->
                            <a href="{{route('politicas')}}" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="txt-orange"
                                >
                                {!! $site['modal_tc_sitepolicy'] ?? '' !!}
                            </a></b>
                        </p>
                    </div>
                </div>  
                </div>
            </div> 
        </div>
        
    </div>
    <!--
    <div class="col-xs-5 col-sm-5 col-md-12 text-center" 
        style="color: #fff; margin: auto; font-weight: lighter;">
        <span style="font-size:14px;line-height: normal;">
            {!! $site['site_policy_text'] ?? '' !!}

            <a href="{{route('terminos')}}" target="_blank" style="color: #fff;text-decoration: underline 1px solid #babbbf;">             
                {!! $site['site_terminos'] ?? '' !!} 
            </a>
            {!! $site['site_conjuncion'] ?? '' !!} 

            <a href="{{route('politicas')}}"  target="_blank" style="color: #fff;text-decoration: underline 1px solid #babbbf;">             
                {!! $site['site_policy'] ?? '' !!} 
            </a>.
        </span>
    </div>
    -->
</div>

<!-- Seccion Ya tienes una cuenta -->

<div class="modal fade" 
    tabindex="-1" 
    role="dialog" 
    >
    <!-- aria-labelledby="exampleModalCenterTitle" 
    aria-hidden="true"     -->
    <div class="modal-dialog" role="document">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h2 class="text-uppercase text-center m-0 txt-blackgray typ-montserrat f-sz-b">
                    Ya tienes una cuenta en <span class="txt-greenblue">DataCRM</span><br>
                </h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center" style="font-size:1.15em; font-weight: bold;">
                <center>
                        <a  style="text-decoration: none; padding: 10px; font-weight: 600;font-size: 20px;color: #ffffff; background-color: #f58756; border-radius: 6px;" 
                            class="boton_personalizado" 
                            id="access_crm" 
                            target="_blank" 
                            href="">
                            INICIAR SESIÓN
                        </a>
                </center>
                <br>
                <a  href="" 
                    id="recover_password" 
                    style="color:#41c3ac; text-decoration: underline;font-size: 1.2em;" 
                    target="_blank" 
                    rel="noopener noreferrer">
                    Recupera tu contraseña Aquí
                </a>
            </div>
            <div class="modal-footer">
                <div class="col-12">
                    <p class="typ-os-regular txt-blackgray mt-4 text-center mb-0">
                        <!-- <b>He leido y estoy de acuerdo con los <a href="https://www.datacrm.com/terminos/" target="_blank" rel="noopener noreferrer">Términos y condiciones</a>  -->
                        <b>He leido y estoy de acuerdo con los 
                            <a  href="{{route('terminos')}}" 
                                target="_blank" 
                                rel="noopener noreferrer">
                                Términos y condiciones
                            </a>                     
                            y 
                            <!-- <a href="https://www.datacrm.com/politicas/" target="_blank" rel="noopener noreferrer">las Políticas de Protección de Datos</a></b> -->
                            <a href="{{route('politicas')}}"
                                target="_blank" 
                                rel="noopener noreferrer">
                                las Políticas de Protección de Datos
                            </a>
                        </b>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
