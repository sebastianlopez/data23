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
                               name="info[webinars_title_meta]"
                               value="{{$info['webinars_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[webinars_desc_meta]"
                               value="{{$info['webinars_desc_meta'] ?? ''}}"/>
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
                               name="info[webinars_title]"
                               value="{{$info['webinars_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[webinars_desc]"
                               value="{{$info['webinars_desc'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección 1</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xl-3 col">
                    <div class="form-group">
                        <label>Texto principal</label>
                        <input type="text" class="form-control"
                               name="info[webinars_one_main_text]"
                               value="{{$info['webinars_one_main_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Posición destacada Texto principal</label>
                        <input type="number" min="1" step="1"
                               class="form-control"
                               name="info[webinars_one_main_featured]"
                               value="{{$info['webinars_one_main_featured'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-6 col">
                    <div class="form-group">
                        <label>Texto central</label>
                        <input type="text" class="form-control"
                               name="info[webinars_one_central_text]"
                               value="{{$info['webinars_one_central_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-3 col">
                    <div class="form-group">
                        <label>Horario</label>
                        <input type="text" class="form-control"
                               name="info[webinars_one_hour]"
                               value="{{$info['webinars_one_hour'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-3 col">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[webinars_one_btn_text]"
                               value="{{$info['webinars_one_btn_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-6 col">
                    <div class="form-group">
                        <label>Enlace botón</label>
                        <input type="url" class="form-control"
                               name="info[webinars_one_btn_link]"
                               value="{{$info['webinars_one_btn_link'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-card">
    <h2>Sección 2</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xl-3 col">
                    <div class="form-group">
                        <label>Texto principal</label>
                        <input type="text" class="form-control"
                               name="info[webinars_two_main_text]"
                               value="{{$info['webinars_two_main_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Posición destacada Texto principal</label>
                        <input type="number" min="1" step="1"
                               class="form-control"
                               name="info[webinars_two_main_featured]"
                               value="{{$info['webinars_two_main_featured'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-6 col">
                    <div class="form-group">
                        <label>Texto central</label>
                        <input type="text" class="form-control"
                               name="info[webinars_two_central_text]"
                               value="{{$info['webinars_two_central_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-3 col">
                    <div class="form-group">
                        <label>Horario</label>
                        <input type="text" class="form-control"
                               name="info[webinars_two_hour]"
                               value="{{$info['webinars_two_hour'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-3 col">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[webinars_two_btn_text]"
                               value="{{$info['webinars_two_btn_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-6 col">
                    <div class="form-group">
                        <label>Enlace botón</label>
                        <input type="url" class="form-control"
                               name="info[webinars_two_btn_link]"
                               value="{{$info['webinars_two_btn_link'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección calendario</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[webinars_calendar_title]"
                               value="{{$info['webinars_calendar_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[webinars_calendar_desc]"
                               value="{{$info['webinars_calendar_desc'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>