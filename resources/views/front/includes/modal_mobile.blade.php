<div class="modal fade visible-xs hidden-sm hidden-md hidden-lg" id="modalMobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-5">
            <div class="modal-header mb-4" style="padding: 0 !important; margin: 0 !important; border: 0 !important;">
                <button onclick="isMobile()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- ¡Información actualizada a donde vayas! -->
            <h2     style="color: #3e6aab !important; font-weight: bold;" 
                    class="text-uppercase text-center mb-4 txt-blackgray typ-montserrat f-sz-b">
                    {!! $site['modal_mb_title'] ?? '' !!}<br>
            </h2>
            <!-- 
                Caracacteristicas 
                    Visualiza y edita tus Negocios
                    Crea Actividades
                    Envía correos
                    Llama a tus Clientes
            -->
            <ul id="app_info" class="mb-4">
                <li>{!! $site['modal_mb_caracteristica1'] ?? '' !!}</li>
                <li>{!! $site['modal_mb_caracteristica2'] ?? '' !!}</li>
                <li>{!! $site['modal_mb_caracteristica3'] ?? '' !!}</li>
                <li>{!! $site['modal_mb_caracteristica4'] ?? '' !!}</li>
            </ul>

            <div class="text-center mb-4" style="overflow: hidden; height: 120px;">
                <img src="https://www.datacrm.com/front/images/home/GIF3.gif" width="70%">
            </div>
            <!-- ¡Información actualizada a donde vayas! -->
            <a id="descarga_app" onclick="isMobile()" class="btn btn-orange txt-white text-uppercase mb-4 f-sz-s btn-sm btn-free">
                <b>{!! $site['modal_mb_descarga'] ?? '' !!}</b>
            </a>
            <!-- ¡Información actualizada a donde vayas! -->
            <div    onclick="isMobile()" class="text-center text-muted" style="cursor: pointer;" 
                    data-dismiss="modal" 
                    aria-label="Close">
            {!! $site['modal_mb_nointeresa'] ?? '' !!}
            </div>
        </div>
    </div>
</div>
