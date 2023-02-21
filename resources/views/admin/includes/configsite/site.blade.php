<div class="box-card">
    <h2>Textos generales</h2>
    <div class="row">
        <div class="col-lg-3 form-group">
            <label>Nosotros</label>
            <input type="text" class="form-control" name="info[site_about]"
                   value="{{$info['site_about'] ?? ''}}"/>
        </div>
        <div class="col-lg-3 form-group">
            <label>Contáctanos</label>
            <input type="text" class="form-control" name="info[site_contact]"
                   value="{{$info['site_contact'] ?? ''}}"/>
        </div>
        <div class="col-lg-3 form-group">
            <label>Producto</label>
            <input type="text" class="form-control" name="info[site_product]"
                   value="{{$info['site_product'] ?? ''}}"/>
        </div>
        <div class="col-lg-3 form-group">
            <label>Planes</label>
            <input type="text" class="form-control" name="info[site_plans]"
                   value="{{$info['site_plans'] ?? ''}}"/>
        </div>
       
    </div>
    <div class="row">
        <div class="col-lg-3 form-group">
            <label>Funciones</label>
            <input type="text" class="form-control" name="info[site_functions]"
                   value="{{$info['site_functions'] ?? ''}}"/>
        </div>
        <div class="col-lg-3 form-group">
            <label>CRM Móvil</label>
            <input type="text" class="form-control" name="info[site_crmmobile]"
                   value="{{$info['site_crmmobile'] ?? ''}}"/>
        </div>
        <div class="col-lg-3 form-group">
            <label>API DataCRM</label>
            <input type="text" class="form-control" name="info[site_api]"
                   value="{{$info['site_api'] ?? ''}}"/>
        </div>
        <div class="col-lg-3 form-group">
            <label>Países</label>
            <input type="text" class="form-control" name="info[site_countries]"
                   value="{{$info['site_countries'] ?? ''}}"/>
        </div>
       
    </div>

    <div class="row">
        <div class="col-lg-3 form-group">
            <label>Capacítate</label>
            <input type="text" class="form-control" name="info[site_trained]"
                   value="{{$info['site_trained'] ?? ''}}"/>
        </div>
        <div class="col-lg-3 form-group">
            <label>Centro de Ayuda</label>
            <input type="text" class="form-control" name="info[site_help]"
                   value="{{$info['site_help'] ?? ''}}"/>
        </div>
        <div class="col-lg-3 form-group">
            <label>Universidad DataCRM</label>
            <input type="text" class="form-control" name="info[site_unidata]"
                   value="{{$info['site_unidata'] ?? ''}}"/>
        </div>
        <div class="col-lg-3 form-group">
            <label>Webinars</label>
            <input type="text" class="form-control" name="info[site_webinars]"
                   value="{{$info['site_webinars'] ?? ''}}"/>
        </div>
       
    </div>

    <div class="row">
        <div class="col-lg-3 form-group">
            <label>Blog</label>
            <input type="text" class="form-control" name="info[site_blog]"
                   value="{{$info['site_blog'] ?? ''}}"/>
        </div>
        <div class="col-lg-3 form-group">
            <label>Socios</label>
            <input type="text" class="form-control" name="info[site_partners]"
                   value="{{$info['site_partners'] ?? ''}}"/>
        </div>
       
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Apps Disponibles</label>
                <textarea class="form-control editor1"
                          name="info[site_apps]"
                          data-size="50px" id="site_apps">
                  {{$info['site_apps'] ?? ''}}
                </textarea>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>Software CRM</label>
                <input type="text" class="form-control"
                       name="info[site_software]"
                       value="{{$info['site_software'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Iniciar Sesión</label>
                <input type="text" class="form-control"
                       name="info[site_login]"
                       value="{{$info['site_login'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Prueba Gratis</label>
                <input type="text" class="form-control"
                       name="info[site_demo]"
                       value="{{$info['site_demo'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>Características</label>
                <input type="text" class="form-control"
                       name="info[site_features]"
                       value="{{$info['site_features'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>Aplicación Móvil</label>
                <input type="text" class="form-control"
                       name="info[site_app_mobile]"
                       value="{{$info['site_app_mobile'] ?? ''}}"/>
            </div>
        </div>

         <div class="col-lg-3">
            <div class="form-group">
                <label>Soporte</label>
                <input type="text" class="form-control"
                       name="info[site_support]"
                       value="{{$info['site_support'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>DataCRM Soluciones S.A.S.</label>
                <input type="text" class="form-control"
                       name="info[site_bottom1]"
                       value="{{$info['site_bottom1'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>Política de Protección de Datos</label>
                <input type="text" class="form-control"
                       name="info[site_bottom2]"
                       value="{{$info['site_bottom2'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Términos y Condiciones</label>
                <input type="text" class="form-control"
                       name="info[site_bottom3]"
                       value="{{$info['site_bottom3'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto cookies superior</label>
                <input type="text" class="form-control"
                       name="info[site_cookies]"
                       value="{{$info['site_cookies'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto cookies inferior</label>
                <input type="text" class="form-control"
                       name="info[site_cookies2]"
                       value="{{$info['site_cookies2'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>Texto captcha 1</label>
                <input type="text" class="form-control"
                       name="info[contact_form_captcha1]"
                       value="{{$info['contact_form_captcha1'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Texto captcha 2</label>
                <input type="text" class="form-control"
                       name="info[contact_form_captcha2]"
                       value="{{$info['contact_form_captcha2'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Texto captcha 3</label>
                <input type="text" class="form-control"
                       name="info[contact_form_captcha3]"
                       value="{{$info['contact_form_captcha3'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Texto captcha 4</label>
                <input type="text" class="form-control"
                       name="info[contact_form_captcha4]"
                       value="{{$info['contact_form_captcha4'] ?? ''}}"/>
            </div>
        </div>

    </div>
</div>

<div class="box-card">
    <h2>Modal registro</h2>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Título</label>
                <textarea class="form-control editor1"
                          name="info[modal_title]"
                          data-size="50px" id="modal_title">
                  {{$info['modal_title'] ?? ''}}
                </textarea>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="form-group">
                <label>Correo</label>
                <input type="text" class="form-control"
                       name="info[modal_email]"
                       value="{{$info['modal_email'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>Compañía</label>
                <input type="text" class="form-control"
                       name="info[modal_company]"
                       value="{{$info['modal_company'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>Texto caracteres disponibles</label>
                <input type="text" class="form-control"
                       name="info[modal_characters]"
                       value="{{$info['modal_characters'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>Texto botón</label>
                <input type="text" class="form-control"
                       name="info[modal_btn]"
                       value="{{$info['modal_btn'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto Resuelve Operación Matemática</label>
                <input type="text" class="form-control"
                       name="info[modal_operaciontxt]"
                       value="{{$info['modal_operaciontxt'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-12">
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto Ya tienes una cuenta</label>
                <input type="text" class="form-control"
                       name="info[modal_cuentatxt]"
                       value="{{$info['modal_cuentatxt'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto Inicia Sesión</label>
                <input type="text" class="form-control"
                       name="info[modal_iniciasesionxt]"
                       value="{{$info['modal_iniciasesionxt'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <h6><b>Sector</b></h6>
            </div>           
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto combo Sector</label>
                <input type="text" class="form-control"
                       name="info[modal_sectortxt]"
                       value="{{$info['modal_sectortxt'] ?? ''}}"/>
            </div>
        </div>

        @for($i=1;$i<13;$i++)    
            <div class="col-lg-12">
                <div class="form-group">                      
                    @switch($i)
                        @case(1)
                            <label>Marketing / Publicidad / Comunicación</label>
                            @break
                        @case(2)
                            <label>Tecnología / Telecomunicaciones</label>
                            @break
                        @case(3)
                            <label>Servicios / Consultor / Financiero / Jurídico</label>
                            @break
                        @case(4)
                            <label>Turismo</label>
                            @break
                        @case(5)
                            <label>Construcción / Inmobiliaria</label>
                            @break
                        @case(6)
                            <label>Comercialización</label>
                            @break
                        @case(7)
                            <label>Fabricantes</label>
                            @break
                        @case(8)
                            <label>Salud</label>
                            @break
                        @case(9)
                            <label>Logística / Transporte</label>
                            @break
                        @case(10)
                            <label>Educación</label>
                            @break
                        @case(11)
                            <label>Soy Estudiante</label>
                            @break
                        @case(12)
                            <label>Otros</label>
                            @break                                                                                                                                                                                                                                                                                                                    
                        @default
                            <label>n/a</label>
                            @break
                    @endswitch                    
                    
                    <input type="text" 
                        class="form-control"
                        name="info[modal_sector{{$i}}]"
                        value="{{$info['modal_sector' . $i] ?? ''}}"/>                

                </div>            
            </div>
        @endfor     
    
        <br>

        <div class="col-lg-12">
            <div class="form-group">
                <h6><b>Pie de Modal</b></h6>
            </div>           
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto al Registrarse acepta</label>
                <input type="text" class="form-control"
                       name="info[site_policy_text]"
                       value="{{$info['site_policy_text'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto Terminos de Servicios</label>
                <input type="text" class="form-control"
                       name="info[site_terminos]"
                       value="{{$info['site_terminos'] ?? ''}}"/>
            </div>
        </div>    
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto conjunción</label>
                <input type="text" class="form-control"
                       name="info[site_conjuncion]"
                       value="{{$info['site_conjuncion'] ?? ''}}"/>
            </div>
        </div>       
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto Política de Privacidad</label>
                <input type="text" class="form-control"
                       name="info[site_policy]"
                       value="{{$info['site_policy'] ?? ''}}"/>
            </div>
        </div>

    </div>
</div>

<div class="box-card">
    <h2>Modal Ya Tienes una Cuenta</h2>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Título</label>
                <textarea class="form-control editor1"
                          name="info[modal_tc_title]"
                          data-size="50px" id="modal_tc_title">
                  {{$info['modal_tc_title'] ?? ''}}
                </textarea>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto botón Inicia Sesión</label>
                <input type="text" class="form-control"
                       name="info[modal_tc_btn1]"
                       value="{{$info['modal_tc_btn1'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto Recupera Contraseña</label>
                <input type="text" class="form-control"
                       name="info[modal_tc_recuperapw]"
                       value="{{$info['modal_tc_recuperapw'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <h6><b>Pie de Modal</b></h6>
            </div>           
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto al Registrarse acepta</label>
                <input type="text" class="form-control"
                       name="info[modal_tc_policytext]"
                       value="{{$info['modal_tc_policytext'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto Terminos de Servicios</label>
                <input type="text" class="form-control"
                       name="info[modal_tc_siteterminos]"
                       value="{{$info['modal_tc_siteterminos'] ?? ''}}"/>
            </div>
        </div> 
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto conjunción</label>
                <input type="text" class="form-control"
                       name="info[modal_tc_conjuncion]"
                       value="{{$info['modal_tc_conjuncion'] ?? ''}}"/>
            </div>
        </div>               
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto Política de Privacidad</label>
                <input type="text" class="form-control"
                       name="info[modal_tc_sitepolicy]"
                       value="{{$info['modal_tc_sitepolicy'] ?? ''}}"/>
            </div>
        </div>

    </div>
</div>

<div class="box-card">
    <h2>Modal Creación Demo Datos Adicionales</h2>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Título</label>
                <textarea class="form-control editor1"
                          name="info[modal_cd_title]"
                          data-size="50px" 
                          id="modal_cd__title">
                  {{$info['modal_cd_title'] ?? ''}}
                </textarea>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="form-group">
                <label>Texto Placeholder Nombre</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_nombre]"
                       value="{{$info['modal_cd_nombre'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label>Texto Placeholder Celular</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_celular]"
                       value="{{$info['modal_cd_celular'] ?? ''}}"/>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="form-group">
                <label>Texto Placeholder Ciudad</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_ciudad]"
                       value="{{$info['modal_cd_ciudad'] ?? ''}}"/>
            </div>
        </div>

        <!-- Seccion Personas que utilizaran DataCRM -->

        <div class="col-lg-12">
            <div class="form-group">
                <h6><b>Personas que Utilizaran DATACRM</b></h6>
            </div>           
        </div>


        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto Combo Personas que Utilizan DataCRM</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_personastxt]"
                       value="{{$info['modal_cd_personastxt'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto de 1 a 2</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_personas1]"
                       value="{{$info['modal_cd_personas1'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto de 3 a 9</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_personas2]"
                       value="{{$info['modal_cd_personas2'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto de 10 a 50</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_personas3]"
                       value="{{$info['modal_cd_personas3'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto Mas de 50</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_personas4]"
                       value="{{$info['modal_cd_personas4'] ?? ''}}"/>
            </div>
        </div>

        <!-- Seccion Rango de Ventas Anuales -->

        <div class="col-lg-12">
            <div class="form-group">
                <h6><b>Rango de Ventas Anuales</b></h6>
            </div>           
        </div>


        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto Combo Rango de Ventas Anuales</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_ventastxt]"
                       value="{{$info['modal_cd_ventastxt'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto Menos de USD 1 Millón</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_ventas1]"
                       value="{{$info['modal_cd_ventas1'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto Entre USD 1 Millón y USD 10 Millones</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_ventas2]"
                       value="{{$info['modal_cd_ventas2'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto Entre USD 11 Millón y USD 50 Millones</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_ventas3]"
                       value="{{$info['modal_cd_ventas3'] ?? ''}}"/>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label>Texto Más de USD 50 Millones</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_ventas4]"
                       value="{{$info['modal_cd_ventas4'] ?? ''}}"/>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="form-group">
                <label>Texto botón</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_btn1]"
                       value="{{$info['modal_cd_btn1'] ?? ''}}"/>
            </div>
        </div>


        <div class="col-lg-12">
        </div>

 
        <br>

        <div class="col-lg-12">
            <div class="form-group">
                <h6><b>Pie de Modal</b></h6>
            </div>           
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto al Registrarse acepta</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_policy_text]"
                       value="{{$info['modal_cd_policy_text'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto Terminos de Servicios</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_terminos]"
                       value="{{$info['modal_cd_terminos'] ?? ''}}"/>
            </div>
        </div>    
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto conjunción</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_conjuncion]"
                       value="{{$info['modal_cd_conjuncion'] ?? ''}}"/>
            </div>
        </div>       
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto Política de Privacidad</label>
                <input type="text" class="form-control"
                       name="info[modal_cd_policy]"
                       value="{{$info['modal_cd_policy'] ?? ''}}"/>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="box-card">
            <h2>Modal Mobile</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1"
                                  name="info[modal_mb_title]"
                                  data-size="50px" 
                                  id="modal_mb_title">
                          {{$info['modal_mb_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
        
        
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto Caracteristica 1</label>
                        <input type="text" class="form-control"
                               name="info[modal_mb_caracteristica1]"
                               value="{{$info['modal_mb_caracteristica1'] ?? ''}}"/>
                    </div>
                </div>
        
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto Caracteristica 2</label>
                        <input type="text" class="form-control"
                               name="info[modal_mb_caracteristica2]"
                               value="{{$info['modal_mb_caracteristica2'] ?? ''}}"/>
                    </div>
                </div>
        
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto Caracteristica 3</label>
                        <input type="text" class="form-control"
                               name="info[modal_mb_caracteristica3]"
                               value="{{$info['modal_mb_caracteristica3'] ?? ''}}"/>
                    </div>
                </div>
        
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto Caracteristica 4</label>
                        <input type="text" class="form-control"
                               name="info[modal_mb_caracteristica4]"
                               value="{{$info['modal_mb_caracteristica4'] ?? ''}}"/>
                    </div>
                </div>
        
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto Enlace de Descarga</label>
                        <input type="text" class="form-control"
                               name="info[modal_mb_descarga]"
                               value="{{$info['modal_mb_descarga'] ?? ''}}"/>
                    </div>
                </div>
        
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto No me Interesa</label>
                        <input type="text" class="form-control"
                               name="info[modal_mb_nointeresa]"
                               value="{{$info['modal_mb_nointeresa'] ?? ''}}"/>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
</div>

