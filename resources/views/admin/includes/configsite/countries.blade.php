<p><span class="text-primary">*</span> Para usar el nombre del país en alguno de los texto inserte <code>{country}</code> en el texto.</p>
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
                               name="info[homep1_title_meta]"
                               value="{{$info['homep1_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[homep1_desc_meta]"
                               value="{{$info['homep1_desc_meta'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección principal</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1"
                                  name="info[homep1_title]"
                                  data-size="50px" id="homep1_title">
                                                                       {{$info['homep1_title'] ?? ''}}
                                                                    </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Subtítulo</label>
                        <input type="text" class="form-control"
                               name="info[homep1_subtitle]"
                               value="{{$info['homep1_subtitle'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[homep1_btn]"
                               value="{{$info['homep1_btn'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<4;$i++)
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Texto {{$i}}</label>
                                    <input type="text" class="form-control"
                                           name="info[homep1_text{{$i}}]"
                                           value="{{$info['homep1_text'.$i] ?? ''}}"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Posición destacada {{$i}}</label>
                                    <input type="number" min="1" step="1"
                                           class="form-control"
                                           name="info[homep1_featured{{$i}}]"
                                           value="{{$info['homep1_featured'.$i] ?? ''}}"/>
                                </div>
                            </div>



                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección iconos</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Título</label>
                <textarea class="form-control editor1"
                          name="info[homep3_title]"
                          data-size="50px" id="homep3_title">
                 {{$info['homep3_title'] ?? ''}}
                </textarea>
            </div>
        </div>
        @for($i = 1;$i < 4;$i++)
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Título {{$i}}</label>
                            <input type="text" class="form-control"
                                   name="info[homep3_title{{$i}}]"
                                   value="{{$info['homep3_title'.$i] ?? ''}}"/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Posición destacada {{$i}}</label>
                            <input type="number" min="1" step="1"
                                   class="form-control"
                                   name="info[homep3_featured{{$i}}]"
                                   value="{{$info['homep3_featured'.$i] ?? ''}}"/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Texto {{$i}}</label>
                            <input type="text" class="form-control"
                                   name="info[homep3_text{{$i}}]"
                                   value="{{$info['homep3_text'.$i] ?? ''}}"/>
                        </div>
                    </div>

                </div>
            </div>
        @endfor
        @for($i = 4;$i < 6;$i++)
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Título {{$i}}</label>
                            <input type="text" class="form-control"
                                   name="info[homep3_title{{$i}}]"
                                   value="{{$info['homep3_title'.$i] ?? ''}}"/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Posición destacada {{$i}}</label>
                            <input type="number" min="1" step="1"
                                   class="form-control"
                                   name="info[homep3_featured{{$i}}]"
                                   value="{{$info['homep3_featured'.$i] ?? ''}}"/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Texto {{$i}}</label>
                            <input type="text" class="form-control"
                                   name="info[homep3_text{{$i}}]"
                                   value="{{$info['homep3_text'.$i] ?? ''}}"/>
                        </div>
                    </div>

                </div>
            </div>
        @endfor
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto botón</label>
                <input type="text" class="form-control"
                       name="info[homep3_btn]"
                       value="{{$info['homep3_btn'] ?? ''}}"/>
            </div>
        </div>
    </div>
</div>


<div class="box-card">
    <h2>Sección Sigues tus Negocios</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[homep4_title]"
                               value="{{$info['homep4_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[homep4_text]"
                               value="{{$info['homep4_text'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto inferior</label>
                <input type="text" class="form-control"
                       name="info[homep4_bottom]"
                       value="{{$info['homep4_bottom'] ?? ''}}"/>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Texto link inferior</label>
                <input type="text" class="form-control"
                       name="info[homep4_bottom_link]"
                       value="{{$info['homep4_bottom_link'] ?? ''}}"/>
            </div>
        </div>

    </div>
</div>


<div class="box-card">
    <h2>Sección Testimoniales</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[homep5_text]"
                               value="{{$info['homep5_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[homep5_btn]"
                               value="{{$info['homep5_btn'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<7;$i++)
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Cliente Testimonio {{$i}}</label>
                            <input  type="text" 
                                    class="form-control"
                                    name="info[homep_ts_testimonanialcliente{{$i}}]"
                                    value="{{$info['homep_ts_testimonanialcliente'.$i] ?? ''}}"/>
                        </div>     
                    </div>                
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Texto Tesitimonio {{$i}}</label>
                            <textarea class="form-control"
                                    name="info[homep_ts_testimonanialtext{{$i}}]"
                                    id="homep_ts_testimonanialtext{{$i}}"
                                    value="{{$info['homep_ts_testimonanialtext'.$i] ?? ''}}"
                                    rows=4
                                    >{{$info['homep_ts_testimonanialtext'.$i] ?? ''}}
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
    <h2>Sección Únete</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control editor1"
                                  name="info[homep6_text]"
                                  data-size="50px" id="homep6_text">
                            {{$info['homep6_text'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[homep6_btn]"
                               value="{{$info['homep6_btn'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
