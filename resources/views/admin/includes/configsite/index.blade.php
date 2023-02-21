<div class="box-card">
    <h2>Tags CEO</h2>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[home1_title_meta]"
                               value="{{$info['home1_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[home1_desc_meta]"
                               value="{{$info['home1_desc_meta'] ?? ''}}"/>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección principal</h2>
    <div class="row">

        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion1_title]"
                               value="{{$info['p2_home_seccion1_title'] ?? ''}}"/>
                    </div>                        
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Subtítulo</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion1_subtitle]"
                               value="{{$info['p2_home_seccion1_subtitle'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Parrafo</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion1_paragraph]"
                                  data-size="50px" 
                                  id="p2_home_seccion1_paragraph"
                                  rows=4
                                  >
                            {{$info['p2_home_seccion1_paragraph'] ?? ''}}
                        </textarea>  

                    </div>
                </div>                
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" 
                                class="form-control"
                               name="info[p2_home_seccion1_btn]"
                               value="{{$info['p2_home_seccion1_btn'] ?? ''}}"/>
                    </div>
                </div>             
            </div>
        </div>

    </div>
    <br>
</div>

<div class="box-card">
    <h2>Usa DataCRM</h2>
    <br>
    <div class="row">

        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion2_title]"
                               value="{{$info['p2_home_seccion2_title'] ?? ''}}"/>
                    </div>                        
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Subtítulo</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion2_subtitle]"
                               value="{{$info['p2_home_seccion2_subtitle'] ?? ''}}"/>
                    </div>
                </div>
    
                @for($i=1;$i<5;$i++)
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Texto {{$i}}</label>
                            <input type="text" class="form-control"
                                    name="info[p2_home_seccion2_texto{{$i}}]"
                                    value="{{$info['p2_home_seccion2_texto'.$i] ?? ''}}"/>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="form-group">
                            <label>Descripción {{$i}}</label>
                            <input type="text" class="form-control"
                                    name="info[p2_home_seccion2_descripcion{{$i}}]"
                                    value="{{$info['p2_home_seccion2_descripcion'.$i] ?? ''}}"/>
                        </div>
                    </div>
                @endfor   
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" 
                                class="form-control"
                               name="info[p2_home_seccion2_btn]"
                               value="{{$info['p2_home_seccion2_btn'] ?? ''}}"/>
                    </div>
                </div>             
            </div>
        </div>

    </div>
    <br>
</div>

<div class="box-card">
    <h2>Transforma tus Procesos</h2>
    <br>
    <div class="row">

        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" 
                            class="form-control"
                               name="info[p2_home_seccion3_title]"
                               value="{{$info['p2_home_seccion3_title'] ?? ''}}"/>                              
                    </div>                        
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text1</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion3_texto1]"
                                  data-size="50px" 
                                  id="p2_home_seccion3_texto1">
                                  {{$info['p2_home_seccion3_texto1'] ?? ''}}                                  
                        </textarea>
                    </div>
                </div>  
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text2</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion3_texto2]"
                                  data-size="50px" 
                                  id="p2_home_seccion3_texto2">
                                {{$info['p2_home_seccion3_texto2'] ?? ''}}
                        </textarea>
                    </div>
                </div>     
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Texto botón Sección Azul</label>
                        <input type="text" 
                                class="form-control"
                               name="info[p2_home_seccion3_btn1]"
                               value="{{$info['p2_home_seccion3_btn1'] ?? ''}}"/>
                    </div>
                </div>    
                <div class="col-lg-12">
                    <h6><b>Sección de Lista</b></h6>
                </div>
                @for($i=3;$i<8;$i++)
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Texto Lista {{$i - 2}}</label>
                            <input type="text" class="form-control"
                                    name="info[p2_home_seccion3_texto{{$i}}]"
                                    value="{{$info['p2_home_seccion3_texto'.$i] ?? ''}}"/>
                        </div>
                    </div>
                @endfor   
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" 
                                class="form-control"
                               name="info[p2_home_seccion3_btn2]"
                               value="{{$info['p2_home_seccion3_btn2'] ?? ''}}"/>
                    </div>
                </div>             
            </div>
        </div>

    </div>
    <br>
</div>

<div class="box-card">
    <h2>Cotizaciones personalizadas</h2>
    <br>
    <div class="row">
    <div class="col-lg-12">
                <div class="form-group">
                        <label>Título</label>
                        <input type="text" 
                            class="form-control"
                               name="info[p2_home_seccion4_title]"
                               value="{{$info['p2_home_seccion4_title'] ?? ''}}"/>
                    </div>                        
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text1</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion4_texto1]"
                                  data-size="50px" 
                                  id="p2_home_seccion4_texto1">
                                  {{$info['p2_home_seccion4_texto1'] ?? ''}}                                  
                        </textarea>
                    </div>
                </div>  
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text2</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion4_texto2]"
                                  data-size="50px" 
                                  id="p2_home_seccion4_texto2">
                                {{$info['p2_home_seccion4_texto2'] ?? ''}}
                        </textarea>
                    </div>
                </div>       
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text2</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion4_texto3]"
                                  data-size="50px" 
                                  id="p2_home_seccion4_texto3">
                                {{$info['p2_home_seccion4_texto3'] ?? ''}}
                        </textarea>
                    </div>
                </div>  
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" 
                                class="form-control"
                               name="info[p2_home_seccion4_btn]"
                               value="{{$info['p2_home_seccion4_btn'] ?? ''}}"/>
                    </div>
                </div>                                     
    </div>
    <br>
</div>

<div class="box-card">
    <h2>Atrae Clientes</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="form-group">
                            <label>Título</label>
                            <input type="text" 
                                class="form-control"
                                name="info[p2_home_seccion5_title]"
                                value="{{$info['p2_home_seccion5_title'] ?? ''}}"/>                   
                    </div>
                </div>
                <div class="col-lg-12">                
                    <div class="form-group">
                            <label>Sub Título</label>
                            <input type="text" 
                                class="form-control"
                                name="info[p2_home_seccion5_subtitle]"
                                value="{{$info['p2_home_seccion5_subtitle'] ?? ''}}"/>                      
                    </div>                
                </div>                 
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text1</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion5_texto1]"
                                  data-size="50px" 
                                  id="p2_home_seccion5_texto1">
                                  {{$info['p2_home_seccion5_texto1'] ?? ''}}                                  
                        </textarea>
                    </div>
                </div>  
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text2</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion5_texto2]"
                                  data-size="50px" 
                                  id="p2_home_seccion5_texto2">
                                {{$info['p2_home_seccion5_texto2'] ?? ''}}
                        </textarea>
                    </div>
                </div>       
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text3</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion5_texto3]"
                                  data-size="50px" 
                                  id="p2_home_seccion5_texto3">
                                {{$info['p2_home_seccion5_texto3'] ?? ''}}
                        </textarea>
                    </div>
                </div>  
                <div class="col-lg-5">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" 
                                class="form-control"
                               name="info[p2_home_seccion5_btn]"
                               value="{{$info['p2_home_seccion5_btn'] ?? ''}}"/>
                    </div>
                </div>                                     
        </div>
        <br>
    </div>
</div>

<div class="box-card">
    <h2>Tus negocios donde vayas</h2>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
            <div class="col-lg-12">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input  type="text" 
                                class="form-control"
                                name="info[p2_home_seccion6_title]"
                                value="{{$info['p2_home_seccion6_title'] ?? ''}}"/>
                    </div>                    
                </div>                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text2</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion6_texto1]"
                                  data-size="200px" 
                                  rows=4
                                  id="p2_home_seccion6_texto1">
                                {{$info['p2_home_seccion6_texto1'] ?? ''}}
                        </textarea>
                    </div>
                </div>                 
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto 2</label>
                        <input  type="text" 
                                class="form-control"
                                name="info[p2_home_seccion6_texto2]"
                                value="{{$info['p2_home_seccion6_texto2'] ?? ''}}"/>
                    </div>     
                </div>                                                           
            </div>
        </div>
    </div>
    <br>
</div>

<div class="box-card">
    <h2>Integraciones que te hacen crecer</h2>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
            <div class="col-lg-12">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input  type="text" 
                                class="form-control"
                                name="info[p2_home_seccion7_title]"
                                value="{{$info['p2_home_seccion7_title'] ?? ''}}"/>
                    </div>                    
                </div>                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text2</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion7_texto1]"
                                  data-size="200px" 
                                  rows=4
                                  id="p2_home_seccion7_texto1">
                                {{$info['p2_home_seccion7_texto1'] ?? ''}}
                        </textarea>
                    </div>
                </div>                                                                        
            </div>
        </div>
    </div>
    <br>
</div>

<div class="box-card">
    <h2>Un CRM Reconocido</h2>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
            <div class="col-lg-12">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input  type="text" 
                                class="form-control"
                                name="info[p2_home_seccion9_title]"
                                value="{{$info['p2_home_seccion9_title'] ?? ''}}"/>
                    </div>                    
                </div>                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Text2</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion9_texto1]"
                                  data-size="200px" 
                                  rows=4
                                  id="p2_home_seccion9_texto1">
                                {{$info['p2_home_seccion9_texto1'] ?? ''}}
                        </textarea>
                    </div>
                </div>                                                                        
            </div>
        </div>
    </div>
    <br>
</div>

<div class="box-card">
    <h2>Testimoniales</h2>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion10_title1]"
                               value="{{$info['p2_home_seccion10_title1'] ?? ''}}"/>
                    </div>
                </div>  

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input  type="text" 
                                class="form-control"
                                name="info[p2_home_seccion10_btntext1]"
                                value="{{$info['p2_home_seccion10_btntext1'] ?? ''}}"/>
                    </div>
                </div>  
                @for($i=1;$i<21;$i++)

                    <div class="col-lg-12">
                        <div class="form-group">
                            <b><label>Cliente Testimonio {{$i}}</label></b>
                            <input  type="text" 
                                    class="form-control"
                                    name="info[p2_home_seccion10_testimonanialcliente{{$i}}]"
                                    value="{{$info['p2_home_seccion10_testimonanialcliente'.$i] ?? ''}}"/>
                        </div>     
                    </div> 

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Texto Tesitimonio {{$i}}</label>
                            <textarea class="form-control"
                                    name="info[p2_home_seccion10_testimonanialtext{{$i}}]"
                                    id="p2_home_seccion10_testimonanialtext{{$i}}"
                                    value="{{$info['p2_home_seccion10_testimonanialtext'.$i] ?? ''}}"
                                    rows=4
                                    >{{$info['p2_home_seccion10_testimonanialtext'.$i] ?? ''}}
                            </textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Persona Tesitimonio {{$i}}</label>
                            <textarea class="form-control"
                                    name="info[p2_home_seccion10_testimonanialpersona{{$i}}]"
                                    id="p2_home_seccion10_testimonanialpersona{{$i}}"
                                    value="{{$info['p2_home_seccion10_testimonanialpersona'.$i] ?? ''}}"
                                    rows=4
                                    >{{$info['p2_home_seccion10_testimonanialpersona'.$i] ?? ''}}
                            </textarea>
                        </div>
                    </div>  

                @endfor   
            </div>
        </div>

    </div>
    <br>
</div>

<div class="box-card">
    <h2>Unete a Miles de Usuarios</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control editor1"
                                  name="info[p2_home_seccion11_text1]"
                                  data-size="50px" id="p2_home_seccion11_text1"
                                  rows=4
                                  >
                            {{$info['p2_home_seccion11_text1'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[p2_home_seccion11_btntext1]"
                               value="{{$info['p2_home_seccion11_btntext1'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>


