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
                               name="info[mobile_title_meta]"
                               value="{{$info['mobile_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[mobile_desc_meta]"
                               value="{{$info['mobile_desc_meta'] ?? ''}}"/>
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
                               name="info[mobile_title]"
                               value="{{$info['mobile_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Sub Titulo Título</label>
                        <input type="text" class="form-control"
                               name="info[mobile_subtitle]"
                               value="{{$info['mobile_subtitle'] ?? ''}}"/>
                    </div>
                </div>                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto 1</label>
                        <textarea class="form-control editor1"
                                  name="info[mobile_text1]"
                                  data-size="100px" 
                                  id="mobile_text1"
                                  rows=4
                                  >
                                  {{$info['mobile_text1'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto 1</label>
                        <textarea class="form-control editor1"
                                  name="info[mobile_text2]"
                                  data-size="100px" 
                                  id="mobile_text2"
                                  rows=4
                                  >
                                  {{$info['mobile_text2'] ?? ''}}
                        </textarea>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto inferior</label>
                        <input type="text" class="form-control"
                               name="info[mobile_text3]"
                               value="{{$info['mobile_text3'] ?? ''}}"/>
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
                               name="info[mobile2_title]"
                               value="{{$info['mobile2_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control editor1"
                                  name="info[mobile2_text1]"
                                  data-size="100px" id="mobile2_text1">
                                  {{$info['mobile2_text1'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[mobile2_btn]"
                               value="{{$info['mobile2_btn'] ?? ''}}"/>
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
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[mobile3_title]"
                               value="{{$info['mobile3_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control editor1"
                                  name="info[mobile3_text1]"
                                  data-size="100px" 
                                  id="mobile3_text1"
                                  rows=4>
                                  {{$info['mobile3_text1'] ?? ''}}
                        </textarea>
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
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[mobile4_title]"
                               value="{{$info['mobile4_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control editor1"
                                  name="info[mobile4_text1]"
                                  data-size="100px" 
                                  id="mobile4_text1"
                                  rows=7
                                  >
                                  {{$info['mobile4_text1'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[mobile4_btn]"
                               value="{{$info['mobile4_btn'] ?? ''}}"/>
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
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[mobile5_title]"
                               value="{{$info['mobile5_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control editor1"
                                  name="info[mobile5_text1]"
                                  data-size="100px" id="mobile5_text1"
                                  rows=9
                                  >
                                  {{$info['mobile5_text1'] ?? ''}}
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
                               name="info[mobile6_title]"
                               value="{{$info['mobile6_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea class="form-control editor1"
                                  name="info[mobile6_text1]"
                                  data-size="100px" id="mobile6_text1"
                                  rows=9>
                                  {{$info['mobile6_text1'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[mobile6_btn]"
                               value="{{$info['mobile6_btn'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


