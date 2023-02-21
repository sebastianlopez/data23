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
                               name="info[sector_title_meta]"
                               value="{{$info['sector_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[sector_desc_meta]"
                               value="{{$info['sector_desc_meta'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección 1 - Head </h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1" name="info[sector_title]"data-size="50px" id="sector_title">{{$info['sector_title'] ?? ''}}</textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[sector_text]"
                               value="{{$info['sector_text'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[sector_btn]"
                               value="{{$info['sector_btn'] ?? ''}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección 2 </h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1"
                                  name="info[sector2_title]"
                                  data-size="50px" id="software2_title">{{$info['sector2_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control" name="info[sector2_btn]" value="{{$info['sector2_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control" name="info[sector2_text]" value="{{$info['sector2_text'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado</label>
                        <input type="text" class="form-control tagsinput" name="info[sector2_list]" data-role="tagsinput" value="{{$info['sector2_list'] ?? ''}}"/>
                    </div>
                </div> 
               
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección 3 </h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1" name="info[sector3_title]" data-size="50px" id="software2_title">{{$info['sector3_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control" name="info[sector3_btn]" value="{{$info['sector3_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control" name="info[sector3_text]" value="{{$info['sector3_text'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado</label>
                        <input type="text" class="form-control tagsinput" name="info[sector3_list]" data-role="tagsinput" value="{{$info['sector3_list'] ?? ''}}"/>
                    </div>
                </div> 
               
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección 4 </h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1" name="info[sector4_title]" data-size="50px" id="software2_title">{{$info['sector4_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control" name="info[sector4_btn]" value="{{$info['sector4_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control" name="info[sector4_text]" value="{{$info['sector4_text'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado</label>
                        <input type="text" class="form-control tagsinput" name="info[sector4_list]" data-role="tagsinput" value="{{$info['sector4_list'] ?? ''}}"/>
                    </div>
                </div> 
               
            </div>
        </div>
    </div>
</div>

<div class="box-card">
    <h2>Sección 5 </h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1" name="info[sector5_title]" data-size="50px" id="software2_title">{{$info['sector5_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control" name="info[sector5_btn]" value="{{$info['sector5_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control" name="info[sector5_text]" value="{{$info['sector5_text'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado</label>
                        <input type="text" class="form-control tagsinput" name="info[sector5_list]" data-role="tagsinput" value="{{$info['sector5_list'] ?? ''}}"/>
                    </div>
                </div> 
               
            </div>
        </div>
    </div>
</div>


<div class="box-card">
    <h2>Sección 6 </h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1" name="info[sector6_title]" data-size="50px" id="sector6_title">{{$info['sector6_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control" name="info[sector6_btn]" value="{{$info['sector6_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control" name="info[sector6_text]" value="{{$info['sector6_text'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado</label>
                        <input type="text" class="form-control tagsinput" name="info[sector6_list]" data-role="tagsinput" value="{{$info['sector6_list'] ?? ''}}"/>
                    </div>
                </div> 
               
            </div>
        </div>
    </div>
</div>



<div class="box-card">
    <h2>Sección 7 - Formulario</h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control"
                               name="info[sector7_title]"
                               value="{{$info['sector7_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[sector7_text]"
                               value="{{$info['sector7_text'] ?? ''}}"/>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
