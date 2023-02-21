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
                               name="info[blog_title_meta]"
                               value="{{$info['blog_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[blog_desc_meta]"
                               value="{{$info['blog_desc_meta'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Textos generales</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Categorías</label>
                        <input type="text" class="form-control"
                               name="info[blog_categories]"
                               value="{{$info['blog_categories'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Buscar Artículo</label>
                        <input type="text" class="form-control"
                               name="info[blog_search]"
                               value="{{$info['blog_search'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Entradas relacionadas</label>
                        <input type="text" class="form-control"
                               name="info[blog_related]"
                               value="{{$info['blog_related'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título superior</label>
                        <input type="text" class="form-control"
                               name="info[blog_text1]"
                               value="{{$info['blog_text1'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto superior</label>
                        <input type="text" class="form-control"
                               name="info[blog_text2]"
                               value="{{$info['blog_text2'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Publicaciones Más Populares</label>
                        <input type="text" class="form-control"
                               name="info[blog_text3]"
                               value="{{$info['blog_text3'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Recomendados</label>
                        <input type="text" class="form-control"
                               name="info[blog_text4]"
                               value="{{$info['blog_text4'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="box-card">
    <h2>Sección verde</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[blog_title_aside]"
                               value="{{$info['blog_title_aside'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[blog_btn_aside]"
                               value="{{$info['blog_btn_aside'] ?? ''}}"/>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Newsletter</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[newsletter_title]"
                               value="{{$info['newsletter_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Placeholder correo</label>
                        <input type="text" class="form-control"
                               name="info[newsletter_desc]"
                               value="{{$info['newsletter_desc'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[newsletter_btn]"
                               value="{{$info['newsletter_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto inferior 1</label>
                        <input type="text" class="form-control"
                               name="info[newsletter_text1]"
                               value="{{$info['newsletter_text1'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto inferior 2</label>
                        <input type="text" class="form-control"
                               name="info[newsletter_text2]"
                               value="{{$info['newsletter_text2'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección inferior</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[blog_bottom_title]"
                               value="{{$info['blog_bottom_title'] ?? ''}}"/>
                    </div>
                </div>
                @for($i = 1;$i < 4;$i++)
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Título {{$i}}</label>
                                    <input type="text" class="form-control"
                                           name="info[blog_bottom_title{{$i}}]"
                                           value="{{$info['blog_bottom_title'.$i] ?? ''}}"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Descripción {{$i}}</label>
                                    <input type="text" class="form-control"
                                           name="info[blog_bottom_desc{{$i}}]"
                                           value="{{$info['blog_bottom_desc'.$i] ?? ''}}"/>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>