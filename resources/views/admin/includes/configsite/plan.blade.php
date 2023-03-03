<div class="box-card">
    <h2>Tags CEO</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[plans_title_meta]"
                               value="{{$info['plans_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[plans_desc_meta]"
                               value="{{$info['plans_desc_meta'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Un CRM en moneda local</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_crmmonedalocal_titulo]"
                               value="{{$info['p2_home_seccion_crmmonedalocal_titulo'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Subtitulo</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_crmmonedalocal_subtitulo]"
                               value="{{$info['p2_home_seccion_crmmonedalocal_subtitulo'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Mas sobre planes</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón Mas sobre planes</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_massobreplanes_textoboton]"
                               value="{{$info['p2_home_seccion_massobreplanes_textoboton'] ?? ''}}"/>
                    </div>
                </div>    

            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Planes</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <br>
        </div>
    </div>    
</div>

<div class="box-card">
    <h2>Gratuito</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_plangratuito_title]"
                               value="{{$info['p2_home_seccion_plangratuito_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_plangratuito_price]"
                               value="{{$info['p2_home_seccion_plangratuito_price'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Subtiutlo precio</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_plangratuito_subtitle]"
                               value="{{$info['p2_home_seccion_plangratuito_subtitle'] ?? ''}}"/>
                    </div>
                </div>                 
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Acceso Limitado</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_plangratuito_subtitle2]"
                               value="{{$info['p2_home_seccion_plangratuito_subtitle2'] ?? ''}}"/>
                    </div>
                </div>             
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Terminos y condiciones</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_plangratuito_terminos]"
                               value="{{$info['p2_home_seccion_plangratuito_terminos'] ?? ''}}"/>
                    </div>
                </div>   
                <div class="col-lg-12">
                    <div class="form-group">
                        <h6><b>Principales funcionalidades</b></h6>
                    </div>
                </div>      
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Titulo principales funcionalidades</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_funcionalidades]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_funcionalidades'] ?? ''}}"/>
                    </div>
                </div>                          
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 1</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_funcionalidad1]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_funcionalidad1'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 2</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_funcionalidad2]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_funcionalidad2'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 3</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_funcionalidad3]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_funcionalidad3'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 4</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_funcionalidad4]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_funcionalidad4'] ?? ''}}"/>
                    </div>
                </div>  
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 5</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_funcionalidad5]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_funcionalidad5'] ?? ''}}"/>
                    </div>
                </div>   

                <!-- <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descuento</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_descuento]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_descuento'] ?? ''}}"/>
                    </div>
                </div>  -->

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Usuarios</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_usuarios]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_usuarios'] ?? ''}}"/>
                    </div>
                </div>     

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón Lo Quiero</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_plangratuito_textoboton]"
                               value="{{$info['p2_home_seccion_plangratuito_textoboton'] ?? ''}}"/>
                    </div>
                </div>        
                <div class="col-lg-12">
                    <div class="form-group">
                        <h6><b>Listados</b></h6>
                    </div>
                </div>   
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Caracteristicas</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_listadocaracteristicas]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_listadocaracteristicas'] ?? ''}}"/>
                    </div>
                </div>                                                    
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Aplicación móvil (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_listadoaplicacionmovil]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_listadoaplicacionmovil'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Soporte (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_plangratuito_listadosoporte]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_plangratuito_listadosoporte'] ?? ''}}"/>
                    </div>
                </div>                

                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Creación de Informes</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_plangratuito_informes]"
                               value="{{$info['p2_home_seccion_plangratuito_informes'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Tareas Automáticas</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_plangratuito_tareasautomaticas]"
                               value="{{$info['p2_home_seccion_plangratuito_tareasautomaticas'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Almacenamiento</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_plangratuito_almacenamiento]"
                               value="{{$info['p2_home_seccion_plangratuito_almacenamiento'] ?? ''}}"/>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
    <br>  
</div>


<div class="box-card">
    <h2>BASICO</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planbasico_title]"
                               value="{{$info['p2_home_seccion_planbasico_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planbasico_price]"
                               value="{{$info['p2_home_seccion_planbasico_price'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Subtiutlo precio</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planbasico_subtitle]"
                               value="{{$info['p2_home_seccion_planbasico_subtitle'] ?? ''}}"/>
                    </div>
                </div>                 
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Subtitulo por Usuario</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planbasico_subtitle2]"
                               value="{{$info['p2_home_seccion_planbasico_subtitle2'] ?? ''}}"/>
                    </div>
                </div>             
                <!-- <div class="col-lg-6">
                    <div class="form-group">
                        <label>Terminos y condiciones</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planbasico_terminos]"
                               value="{{$info['p2_home_seccion_planbasico_terminos'] ?? ''}}"/>
                    </div>
                </div>    -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <h6><b>Principales funcionalidades</b></h6>
                    </div>
                </div>      
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Titulo principales funcionalidades</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_funcionalidades]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_funcionalidades'] ?? ''}}"/>
                    </div>
                </div>                          
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 1</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_funcionalidad1]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_funcionalidad1'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 2</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_funcionalidad2]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_funcionalidad2'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 3</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_funcionalidad3]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_funcionalidad3'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 4</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_funcionalidad4]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_funcionalidad4'] ?? ''}}"/>
                    </div>
                </div>  
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 5</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_funcionalidad5]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_funcionalidad5'] ?? ''}}"/>
                    </div>
                </div>   

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descuento</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_descuento]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_descuento'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Implementación</label>
                        <input type="text" class="form-control " 
                                name="info[implementacion_planbasico_usuarios]"
                               
                               value="{{$info['implementacion_planbasico_usuarios'] ?? ''}}"/>
                    </div>
                </div>   

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Usuarios</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_usuarios]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_usuarios'] ?? ''}}"/>
                    </div>
                </div>     

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón Lo Quiero</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planbasico_textoboton]"
                               value="{{$info['p2_home_seccion_planbasico_textoboton'] ?? ''}}"/>
                    </div>
                </div>        
                <div class="col-lg-12">
                    <div class="form-group">
                        <h6><b>Listados</b></h6>
                    </div>
                </div>   
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Caracteristicas</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_listadocaracteristicas]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_listadocaracteristicas'] ?? ''}}"/>
                    </div>
                </div>                                                    
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Aplicación móvil (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_listadoaplicacionmovil]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_listadoaplicacionmovil'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Soporte (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planbasico_listadosoporte]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planbasico_listadosoporte'] ?? ''}}"/>
                    </div>
                </div>                

                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Creación de Informes</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planbasico_informes]"
                               value="{{$info['p2_home_seccion_planbasico_informes'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Tareas Automáticas</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planbasico_tareasautomaticas]"
                               value="{{$info['p2_home_seccion_planbasico_tareasautomaticas'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Almacenamiento</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planbasico_almacenamiento]"
                               value="{{$info['p2_home_seccion_planbasico_almacenamiento'] ?? ''}}"/>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
    <br>  
</div>


<div class="box-card">
    <h2>PRO</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planpro_title]"
                               value="{{$info['p2_home_seccion_planpro_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planpro_price]"
                               value="{{$info['p2_home_seccion_planpro_price'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Subtiutlo precio</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planpro_subtitle]"
                               value="{{$info['p2_home_seccion_planpro_subtitle'] ?? ''}}"/>
                    </div>
                </div>                 
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Subtitulo por usuario</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planpro_subtitle2]"
                               value="{{$info['p2_home_seccion_planpro_subtitle2'] ?? ''}}"/>
                    </div>
                </div>             
                <!-- <div class="col-lg-6">
                    <div class="form-group">
                        <label>Terminos y condiciones</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planpro_terminos]"
                               value="{{$info['p2_home_seccion_planpro_terminos'] ?? ''}}"/>
                    </div>
                </div>    -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <h6><b>Principales funcionalidades</b></h6>
                    </div>
                </div>      
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Titulo principales funcionalidades</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_funcionalidades]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_funcionalidades'] ?? ''}}"/>
                    </div>
                </div>                          
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 1</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_funcionalidad1]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_funcionalidad1'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 2</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_funcionalidad2]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_funcionalidad2'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 3</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_funcionalidad3]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_funcionalidad3'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 4</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_funcionalidad4]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_funcionalidad4'] ?? ''}}"/>
                    </div>
                </div>  
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Funcionalidad 5</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_funcionalidad5]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_funcionalidad5'] ?? ''}}"/>
                    </div>
                </div>   

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descuento</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_descuento]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_descuento'] ?? ''}}"/>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Implementación</label>
                        <input type="text" class="form-control" 
                                name="info[implementacion__planpro_usuarios]"
                              
                               value="{{$info['implementacion__planpro_usuarios'] ?? ''}}"/>
                    </div>
                </div>   

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Usuarios</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_usuarios]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_usuarios'] ?? ''}}"/>
                    </div>
                </div>     

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón Lo Quiero</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planpro_textoboton]"
                               value="{{$info['p2_home_seccion_planpro_textoboton'] ?? ''}}"/>
                    </div>
                </div>        
                <div class="col-lg-12">
                    <div class="form-group">
                        <h6><b>Listados</b></h6>
                    </div>
                </div>   
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Caracteristicas</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_listadocaracteristicas]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_listadocaracteristicas'] ?? ''}}"/>
                    </div>
                </div>                                                    
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Aplicación móvil (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_listadoaplicacionmovil]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_listadoaplicacionmovil'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Soporte (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[p2_home_seccion_planpro_listadosoporte]"
                               data-role="tagsinput"
                               value="{{$info['p2_home_seccion_planpro_listadosoporte'] ?? ''}}"/>
                    </div>
                </div>                

                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Creación de Informes</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planpro_informes]"
                               value="{{$info['p2_home_seccion_planpro_informes'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Tareas Automáticas</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planpro_tareasautomaticas]"
                               value="{{$info['p2_home_seccion_planpro_tareasautomaticas'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Almacenamiento</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion_planpro_almacenamiento]"
                               value="{{$info['p2_home_seccion_planpro_almacenamiento'] ?? ''}}"/>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
    <br>  
</div>


<div class="box-card">
    <h2>Sección planes</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control editor1"
                                  name="info[plans_title]"
                                  data-size="50px" id="plans_title">
                           {{$info['plans_title'] ?? ''}}
                         </textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Subtítulo</label>
                        <input type="text" class="form-control"
                               name="info[plans_subtitle]"
                               value="{{$info['plans_subtitle'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto pago anual</label>
                        <input type="text" class="form-control"
                               name="info[plans_payment1]"
                               value="{{$info['plans_payment1'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto pago mensual</label>
                        <input type="text" class="form-control"
                               name="info[plans_payment2]"
                               value="{{$info['plans_payment2'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto Boton Mas sobre Planes del Home</label>
                        <input type="text" class="form-control"
                               name="info[plans_btn1]"
                               value="{{$info['plans_btn1'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto Boton Comparar Planes en Pagina de Planes</label>
                        <input type="text" class="form-control"
                               name="info[plans_btn2]"
                               value="{{$info['plans_btn2'] ?? ''}}"/>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Plan Gratuito</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[plan1_title]"
                               value="{{$info['plan1_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Subtítulo</label>
                        <input type="text" class="form-control"
                               name="info[plan1_subtitle]"
                               value="{{$info['plan1_subtitle'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto de Terminos y condiciones</label>
                        <input type="text" class="form-control"
                               name="info[plan1_subtitle2]"
                               value="{{$info['plan1_subtitle2'] ?? ''}}"/>
                    </div>
                </div>                 
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Usuarios del plan</label>
                        <input type="text" class="form-control"
                               name="info[plan1_subtitle3]"
                               value="{{$info['plan1_subtitle3'] ?? ''}}"/>
                    </div>
                </div>             
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[plan1_btn]"
                               value="{{$info['plan1_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <h6>Características del Plan</h6>
                    </div>
                </div>                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Características (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" name="info[plan1_features]"
                               data-role="tagsinput"
                               value="{{$info['plan1_features'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Aplicación móvil (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" name="info[plan1_features2]"
                               data-role="tagsinput"
                               value="{{$info['plan1_features2'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Soporte (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" name="info[plan1_features3]"
                               data-role="tagsinput"
                               value="{{$info['plan1_features3'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Creación de Informes</label>
                        <input type="text" class="form-control"
                               name="info[plan1_report]"
                               value="{{$info['plan1_report'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tareas Automáticas</label>
                        <input type="text" class="form-control"
                               name="info[plan1_task]"
                               value="{{$info['plan1_task'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Almacenamiento</label>
                        <input type="text" class="form-control"
                               name="info[plan2_storage]"
                               value="{{$info['plan1_storage'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="box-card">
    <h2>Plan Básico</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[plan2_title]"
                               value="{{$info['plan2_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Subtítulo</label>
                        <input type="text" class="form-control"
                               name="info[plan2_subtitle]"
                               value="{{$info['plan2_subtitle'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto de Terminos y condiciones</label>
                        <input type="text" class="form-control"
                               name="info[plan2_subtitle2]"
                               value="{{$info['plan2_subtitle2'] ?? ''}}"/>
                    </div>
                </div>                 
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Usuarios del plan</label>
                        <input type="text" class="form-control"
                               name="info[plan2_subtitle3]"
                               value="{{$info['plan2_subtitle3'] ?? ''}}"/>
                    </div>
                </div>             
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[plan2_btn]"
                               value="{{$info['plan2_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <h6>Características del Plan</h6>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Características (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[plan2_features]"
                                data-role="tagsinput"
                                value="{{$info['plan2_features'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Aplicación móvil (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[plan2_features2]"
                               data-role="tagsinput"
                               value="{{$info['plan2_features2'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Soporte (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[plan2_features3]"
                                data-role="tagsinput"
                                value="{{$info['plan2_features3'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Creación de Informes</label>
                        <input type="text" class="form-control"
                               name="info[plan2_report]"
                               value="{{$info['plan2_report'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tareas Automáticas</label>
                        <input type="text" class="form-control"
                               name="info[plan2_task]"
                               value="{{$info['plan2_task'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Almacenamiento</label>
                        <input type="text" class="form-control"
                               name="info[plan2_storage]"
                               value="{{$info['plan2_storage'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="box-card">
    <h2>Plan Pro</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[plan3_title]"
                               value="{{$info['plan3_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Subtítulo</label>
                        <input type="text" class="form-control"
                               name="info[plan3_subtitle]"
                               value="{{$info['plan3_subtitle'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto de Terminos y condiciones</label>
                        <input type="text" class="form-control"
                               name="info[plan3_subtitle2]"
                               value="{{$info['plan3_subtitle2'] ?? ''}}"/>
                    </div>
                </div>      
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Usuarios del Plan</label>
                        <input type="text" class="form-control"
                               name="info[plan3_subtitle3]"
                               value="{{$info['plan3_subtitle3'] ?? ''}}"/>
                    </div>
                </div>                            
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[plan3_btn]"
                               value="{{$info['plan3_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <h6>Características del Plan</h6>
                    </div>
                </div>                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Características (separa con una 'coma' cada palabra)</label>
                        <input  type="text" class="form-control tagsinput" 
                                name="info[plan3_features]"
                                data-role="tagsinput"
                                value="{{$info['plan3_features'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Aplicación móvil (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" 
                                name="info[plan3_features2]"
                                data-role="tagsinput"
                                value="{{$info['plan3_features2'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Soporte (separa con una 'coma' cada palabra)</label>
                        <input type="text" 
                                class="form-control tagsinput" 
                                name="info[plan3_features3]"
                                data-role="tagsinput"
                                value="{{$info['plan3_features3'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Creación de Informes</label>
                        <input  type="text" 
                                class="form-control"
                                name="info[plan3_report]"
                                value="{{$info['plan3_report'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tareas Automáticas</label>
                        <input  type="text" 
                                class="form-control"
                                name="info[plan3_task]"
                                value="{{$info['plan3_task'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Almacenamiento</label>
                        <input  type="text" 
                                class="form-control"
                                name="info[plan3_storage]"
                                value="{{$info['plan3_storage'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="box-card">
    <h2>Palabras cuadro comparación</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título parte 1</label>
                        <input type="text" class="form-control"
                               name="info[features1_title]"
                               value="{{$info['features1_title'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<23;$i++)
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Característica {{$i}}</label>
                            <input type="text" class="form-control"
                                   name="info[features1_f{{$i}}]"
                                   value="{{$info['features1_f'.$i] ?? ''}}"/>
                        </div>
                    </div>
                @endfor

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título parte 2</label>
                        <input type="text" class="form-control"
                               name="info[features2_title]"
                               value="{{$info['features2_title'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<8;$i++)
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Característica {{$i}}</label>
                            <input type="text" class="form-control"
                                   name="info[features2_f{{$i}}]"
                                   value="{{$info['features2_f'.$i] ?? ''}}"/>
                        </div>
                    </div>
                @endfor

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título parte 3</label>
                        <input type="text" class="form-control"
                               name="info[features3_title]"
                               value="{{$info['features3_title'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<5;$i++)
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Característica {{$i}}</label>
                            <input type="text" class="form-control"
                                   name="info[features3_f{{$i}}]"
                                   value="{{$info['features3_f'.$i] ?? ''}}"/>
                        </div>
                    </div>
                @endfor
            </div>


            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Comparar planes</label>
                        <input type="text" class="form-control"
                               name="info[plans_compare]"
                               value="{{$info['plans_compare'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>informes personalizados</label>
                        <input type="text" class="form-control"
                               name="info[plans_compare]"
                               value="{{$info['plans_compare'] ?? ''}}"/>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección azul</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[plans_blue_title]"
                               value="{{$info['plans_blue_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Subtitulo</label>
                        <input type="text" class="form-control"
                               name="info[plans_blue_middle]"
                               value="{{$info['plans_blue_middle'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[plans_blue_btn]"
                               value="{{$info['plans_blue_btn'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="box-card">
    <h2>Sección blanca</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[plans_white_title]"
                               value="{{$info['plans_white_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Subtítulo</label>
                        <input type="text" class="form-control"
                               name="info[plans_white_subtitle]"
                               value="{{$info['plans_white_subtitle'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control"
                                  name="info[plans_white_text]">
                           {{$info['plans_white_text'] ?? ''}}
                         </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección gris</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[plans_gray_title]"
                               value="{{$info['plans_gray_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[plans_gray_btn]"
                               value="{{$info['plans_gray_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Inicia desde</label>
                        <input type="text" class="form-control"
                               name="info[plans_gray_from]"
                               value="{{$info['plans_gray_from'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Por mes</label>
                        <input type="text" class="form-control"
                               name="info[plans_gray_month]"
                               value="{{$info['plans_gray_month'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado Características (separa con una 'coma' cada palabra)</label>
                        <input type="text" class="form-control tagsinput" name="info[plans_gray_features]"
                               data-role="tagsinput"
                               value="{{$info['plans_gray_features'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección FAQ</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[faq_title]"
                               value="{{$info['faq_title'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<5;$i++)
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Pregunta</label>
                        <input type="text" class="form-control"
                               name="info[faq_question{{$i}}]"
                               value="{{$info['faq_question'.$i] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Respuesta</label>
                        <textarea class="form-control"
                                  name="info[faq_answer{{$i}}]">
                           {{$info['faq_answer'.$i] ?? ''}}
                         </textarea>
                    </div>
                </div>
                @endfor
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[faq_btn]"
                               value="{{$info['faq_btn'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>