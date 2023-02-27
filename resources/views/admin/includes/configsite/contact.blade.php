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
                               name="info[contact_title_meta]"
                               value="{{$info['contact_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[contact_desc_meta]"
                               value="{{$info['contact_desc_meta'] ?? ''}}"/>
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
                        <input type="text" class="form-control"
                               name="info[contact_title]"
                               value="{{$info['contact_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control editor1"
                                  name="info[contact_text]"
                                  data-size="50px" id="contact_text">
                           {{$info['contact_text'] ?? ''}}
                         </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Formulario</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Placeholder Nombre</label>
                        <input type="text" class="form-control"
                               name="info[contact_form_name]"
                               value="{{$info['contact_form_name'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Placeholder Teléfono</label>
                        <input type="text" class="form-control"
                               name="info[contact_form_phone]"
                               value="{{$info['contact_form_phone'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Placeholder Correo</label>
                        <input type="text" class="form-control"
                               name="info[contact_form_email]"
                               value="{{$info['contact_form_email'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Placeholder Mensaje</label>
                        <input type="text" class="form-control"
                               name="info[contact_form_body]"
                               value="{{$info['contact_form_body'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[contact_form_btn]"
                               value="{{$info['contact_form_btn'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Texto inferior 1</label>
                        <input type="text" class="form-control"
                               name="info[contact_form_bottom1]"
                               value="{{$info['contact_form_bottom1'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Texto inferior 2</label>
                        <input type="text" class="form-control"
                               name="info[contact_form_bottom2]"
                               value="{{$info['contact_form_bottom2'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Preguntas frecuentes</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[contact_faq_title]"
                               value="{{$info['contact_faq_title'] ?? ''}}"/>
                    </div>
                </div>
                @for($i = 1;$i < 7;$i++)
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Pregunta {{$i}}</label>
                            <input type="text" class="form-control"
                                   name="info[contact_faq{{$i}}]"
                                   value="{{$info['contact_faq'.$i] ?? ''}}"/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Respuesta {{$i}}</label>
                            <input type="text" class="form-control"
                                   name="info[contact_faq_aws{{$i}}]"
                                   value="{{$info['contact_faq_aws'.$i] ?? ''}}"/>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>