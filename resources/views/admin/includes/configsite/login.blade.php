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
                               name="info[login_title_meta]"
                               value="{{$info['login_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[login_desc_meta]"
                               value="{{$info['login_desc_meta'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección formulario</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[login_title]"
                               value="{{$info['login_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[login_btn]"
                               value="{{$info['login_btn'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Placeholder correo</label>
                        <input type="text" class="form-control"
                               name="info[login_form_email]"
                               value="{{$info['login_form_email'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Placeholder contraseña</label>
                        <input type="text" class="form-control"
                               name="info[login_form_password]"
                               value="{{$info['login_form_password'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Texto contraseña olvidada</label>
                        <input type="text" class="form-control"
                               name="info[login_form_forgot_password]"
                               value="{{$info['login_form_forgot_password'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Texto correo olvidado</label>
                        <input type="text" class="form-control"
                               name="info[login_form_forgot_email]"
                               value="{{$info['login_form_forgot_email'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Texto registrarse</label>
                        <input type="text" class="form-control"
                               name="info[login_form_register]"
                               value="{{$info['login_form_register'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Texto botón registrarse</label>
                        <input type="text" class="form-control"
                               name="info[login_form_btn_register]"
                               value="{{$info['login_form_btn_register'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Modal cambiar contraseña</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[login_forgot_password_title]"
                               value="{{$info['login_forgot_password_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón enviar</label>
                        <input type="text" class="form-control"
                               name="info[login_forgot_password_btn]"
                               value="{{$info['login_forgot_password_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón volver</label>
                        <input type="text" class="form-control"
                               name="info[login_forgot_password_back]"
                               value="{{$info['login_forgot_password_back'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección derecha</h2>
    <br>
    <div class="row">
        <div class="col-lg-10">
            <div class="row">
                <div class="col-xl-6 col">
                    <div class="form-group">
                        <label>Texto principal</label>
                        <input type="text" class="form-control"
                               name="info[login_main_text]"
                               value="{{$info['login_main_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-6 col">
                    <div class="form-group">
                        <label>Texto central</label>
                        <input type="text" class="form-control"
                               name="info[login_central_text]"
                               value="{{$info['login_central_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-3 col">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[login_btn_text]"
                               value="{{$info['login_btn_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-6 col">
                    <div class="form-group">
                        <label>Enlace botón</label>
                        <input type="url" class="form-control"
                               name="info[login_btn_link]"
                               value="{{$info['login_btn_link'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-xl-3 col">
                    <div class="form-group">
                        <label>Texto descargar App</label>
                        <input type="text" class="form-control"
                               name="info[login_text_app]"
                               value="{{$info['login_text_app'] ?? ''}}"/>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-2">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        @include('admin.includes.main-image',['title'=>'Imagen (720px ancho x 720px alto)','name'=>'login_image'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>