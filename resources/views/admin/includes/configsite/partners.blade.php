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
                               name="info[parteners_title_meta]"
                               value="{{$info['parteners_title_meta'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control"
                               name="info[partners_desc_meta]"
                               value="{{$info['partners_desc_meta'] ?? ''}}"/>
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
                        <textarea class="form-control editor1" name="info[partners_title]"data-size="50px" id="partners_title">{{$info['partners_title'] ?? ''}}</textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control"
                               name="info[partners_text]"
                               value="{{ $info['partners_text'] ?? '' }}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control"
                               name="info[partners_btn]"
                               value="{{$info['partners_btn'] ?? ''}}"/>
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
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" name="info[partners2_title]" value="{{$info['partners2_title'] ?? ''}}"/>
                       
                    </div>
                </div>
                @for($i=1;$i<5;$i++)
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto Bloque {{ $i }}</label>
                        <input type="text" class="form-control" name="info[partners2_text{{ $i }}]" value="{{$info['partners2_text'.$i.''] ?? ''}}"/>
                    </div>
                </div>
                @endfor

               
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
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Título</label>
                        <textarea class="form-control editor1" name="info[partners3_title]"  id="partners3_title">{{$info['partners3_title'] ?? ''}}
                        </textarea>
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
                        <label>Texto botón</label>
                        <input type="text" class="form-control" name="info[partners4_btn]" value="{{$info['partners4_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <input class="form-control editor1" name="info[partners4_title]" data-size="50px" id="partners4_title" value="{{$info['partners4_title'] ?? ''}}" />
                        
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
                        <input type="text" class="form-control" name="info[partners5_title]" value="{{$info['partners5_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control" name="info[partners5_btn]" value="{{$info['partners5_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control" name="info[partners5_text]" value="{{$info['partners5_text'] ?? ''}}"/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" name="info[partners5_1_title]" value="{{$info['partners5_1_title'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control" name="info[partners5_1_btn]" value="{{$info['partners5_1_btn'] ?? ''}}"/>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control" name="info[partners5_1_text]" value="{{$info['partners5_1_text'] ?? ''}}"/>
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
                        <textarea class="form-control editor1" name="info[partners6_title]" data-size="50px" id="partners6_title">{{$info['partners6_title'] ?? ''}}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Texto botón</label>
                        <input type="text" class="form-control" name="info[partners6_btn]" value="{{$info['partners6_btn'] ?? ''}}"/>
                    </div>
                </div>
            

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Listado</label>
                        <input type="text" class="form-control tagsinput" name="info[partners6_list]" data-role="tagsinput" value="{{$info['partners6_list'] ?? ''}}"/>
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
