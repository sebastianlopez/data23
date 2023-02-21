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
                               name="info[software_title_meta]"
                               value="{{$info['software_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[software_desc_meta]"
                               value="{{$info['software_desc_meta'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección 1 - Software CRM </h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1"
                                  name="info[software1_title]"
                                  data-size="50px" id="software1_title">
                           {{$info['software1_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[software1_text]"
                               value="{{$info['software1_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[software1_btn]"
                               value="{{$info['software1_btn'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<4;$i++)
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Texto {{$i}}</label>
                                    <input type="text" class="form-control"
                                           name="info[software1_text{{$i}}]"
                                           value="{{$info['software1_text'.$i] ?? ''}}"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Posición destacada {{$i}}</label>
                                    <input type="number" min="1" step="1"
                                           class="form-control"
                                           name="info[software1_featured{{$i}}]"
                                           value="{{$info['software1_featured'.$i] ?? ''}}"/>
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
    <h2>Sección 2 - Gestiona tus Embudos</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1"
                                  name="info[software2_title]"
                                  data-size="50px" id="software2_title">
                           {{$info['software2_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[software2_text]"
                               value="{{$info['software2_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[software2_btn]"
                               value="{{$info['software2_btn'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<4;$i++)
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Texto {{$i}}</label>
                                    <input type="text" class="form-control"
                                           name="info[software2_text{{$i}}]"
                                           value="{{$info['software2_text'.$i] ?? ''}}"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Posición destacada {{$i}}</label>
                                    <input type="number" min="1" step="1"
                                           class="form-control"
                                           name="info[software2_featured{{$i}}]"
                                           value="{{$info['software2_featured'.$i] ?? ''}}"/>
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
    <h2>Sección 3 - Mide tu Fuerza de ventas</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1"
                                  name="info[software3_title]"
                                  data-size="50px" id="software3_title">
                           {{$info['software3_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[software3_text]"
                               value="{{$info['software3_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[software3_btn]"
                               value="{{$info['software3_btn'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<4;$i++)
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Texto {{$i}}</label>
                                    <input type="text" class="form-control"
                                           name="info[software3_text{{$i}}]"
                                           value="{{$info['software3_text'.$i] ?? ''}}"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Posición destacada {{$i}}</label>
                                    <input type="number" min="1" step="1"
                                           class="form-control"
                                           name="info[software3_featured{{$i}}]"
                                           value="{{$info['software3_featured'.$i] ?? ''}}"/>
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
    <h2>Sección 4 - Usalo Donde Estes</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
            <div class="col-lg-12">
                    <div class="form-group">
                        <label>Ante Titulo</label>
                        <textarea class="form-control editor1"
                                  name="info[software4_beforetitle]"
                                  data-size="50px" id="software4_beforetitle">
                           {{$info['software4_beforetitle'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1"
                                  name="info[software4_title]"
                                  data-size="50px" id="software4_title">
                           {{$info['software4_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[software4_text]"
                               value="{{$info['software4_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[software4_btn]"
                               value="{{$info['software4_btn'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<4;$i++)
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Texto {{$i}}</label>
                                    <input type="text" class="form-control"
                                           name="info[software4_text{{$i}}]"
                                           value="{{$info['software4_text'.$i] ?? ''}}"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Posición destacada {{$i}}</label>
                                    <input type="number" min="1" step="1"
                                           class="form-control"
                                           name="info[software4_featured{{$i}}]"
                                           value="{{$info['software4_featured'.$i] ?? ''}}"/>
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
    <h2>Sección 5 - Crea y Envia Cotizaciones</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1"
                                  name="info[software5_title]"
                                  data-size="50px" id="software5_title">
                           {{$info['software5_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[software5_text]"
                               value="{{$info['software5_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[software5_btn]"
                               value="{{$info['software5_btn'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<4;$i++)
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Texto {{$i}}</label>
                                    <input type="text" class="form-control"
                                           name="info[software5_text{{$i}}]"
                                           value="{{$info['software5_text'.$i] ?? ''}}"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Posición destacada {{$i}}</label>
                                    <input type="number" min="1" step="1"
                                           class="form-control"
                                           name="info[software5_featured{{$i}}]"
                                           value="{{$info['software5_featured'.$i] ?? ''}}"/>
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
    <h2>Sección 6 - Integraciones que te Hacen crecer</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1"
                                  name="info[software6_title]"
                                  data-size="50px" id="software6_title">
                           {{$info['software6_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[software6_text]"
                               value="{{$info['software6_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[software6_btn]"
                               value="{{$info['software6_btn'] ?? ''}}"/>
                    </div>
                </div>
                @for($i=1;$i<4;$i++)
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Texto {{$i}}</label>
                                    <input type="text" class="form-control"
                                           name="info[software6_text{{$i}}]"
                                           value="{{$info['software6_text'.$i] ?? ''}}"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Posición destacada {{$i}}</label>
                                    <input type="number" min="1" step="1"
                                           class="form-control"
                                           name="info[software6_featured{{$i}}]"
                                           value="{{$info['software6_featured'.$i] ?? ''}}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
