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
                               name="info[about_title_meta]"
                               value="{{$info['about_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>

                        <input type="text" class="form-control"
                               name="info[about_desc_meta]"
                               value="{{$info['about_desc_meta'] ?? ''}}"/>
        
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
                               name="info[about_title]"
                               value="{{$info['about_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto 1</label>
                        <textarea class="form-control editor1"
                                  name="info[about_text]"
                                  data-size="200px" id="about_text"
                                  rows=5
                                  >
                           {{$info['about_text'] ?? ''}}
                         </textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto 2</label>
                        <textarea class="form-control editor1"
                                  name="info[about_textb]"
                                  data-size="200px" id="about_textb"
                                  rows=5
                                  >
                           {{$info['about_textb'] ?? ''}}
                         </textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto 3</label>
                        <textarea class="form-control editor1"
                                  name="info[about_textc]"
                                  data-size="200px" id="about_textc"
                                  rows=5
                                  >
                           {{$info['about_textc'] ?? ''}}
                         </textarea>
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
                               name="info[about_title2]"
                               value="{{$info['about_title2'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control editor1"
                                  name="info[about_text2]"
                                  data-size="50px" id="about_text2">
                           {{$info['about_text2'] ?? ''}}
                         </textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[about_btn]"
                               value="{{$info['about_btn'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>