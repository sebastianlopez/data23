<div class="modal fade hide" id="modalPagos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-pay" style="max-width: 700px !important;" role="document">
        <div class="modal-content p-2">
            <div class="modal-header row" style="padding-bottom: 0px !important; border-bottom:none">
                <span class="titlePagoModal modal-title text-uppercase text-center m-0 txt-blackgray f-sz-b col-lg-12" style="font-size: 2.3rem;font-weight: 700;"> 
                    Realizar <span class="txt-greenblue">Pago</span>
                    <button type="button" class="close pull-right float-right" data-dismiss="modal" aria-label="Close" style="padding:0">
                    <i class="fa fa-times" style="color: #000;"></i>
                </button>
                </span>
         
            </div>
            <div class="modal-body text-center">
                <p class="mb-0">
                    <span class="txt-gray typ-os-regular f-sz-b">
                        Para realizar el pago debes  <br>  iniciar sesión en tu cuenta demo
                    </span>
                </p>
            </div>
            <div class="modal-footer" style="border-top: none;">
                <div class="col-12 text-center">
                    <a href="https://www.datacrm.com/iniciar-sesion/?pay=true" class="payment_identifier typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 btn-orange"><b>Ya tengo cuenta demo</b></a>
                    <button id="createAccount" onclick="createAccount();" class="typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 btn-orange"><b>Crear mi cuenta demo</b></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade hide" id="modalPagosEx" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-pay" style="max-width: 700px !important;" role="document">
    <div class="modal-content p-4">
            <div class="modal-header row">
                <span class="titlePagoModal modal-title text-uppercase text-center m-0 txt-blackgray typ-montserrat f-sz-b col-lg-12" style="font-size: 2.3rem;font-weight: 700;">
                    Realizar <span class="txt-greenblue">Pago</span>
                    <button type="button" class="close pull-right float-right" data-dismiss="modal" aria-label="Close" style="padding:0">
                    <i class="fa fa-times" style="color: #000;"></i>
                </button>
                </span>
         
            </div>
            <div class="modal-body text-center">
                <p class="mb-0">
                    <span class="txt-gray typ-os-regular f-sz-b">
                        Para realizar el pago debes <br>iniciar sesión en tu cuenta demo
                    </span>
                </p>
            </div>
            <div class="modal-footer">
                <div class="col-12 text-center">
                    <a href="https://www.datacrm.com/iniciar-sesion/?pay=true" class="payment_identifier typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 btn-orange"><b>Ya tengo cuenta demo</b></a>
                    <button id="createAccount" onclick="createAccount();" class="typ-montserrat text-uppercase f-sz-sm btn mt-2 px-4 btn-orange"><b>Crear mi cuenta demo</b></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade hide" id="modalPagoSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content p-4">
            <div class="modal-header" style="padding: 0 !important; margin: 0 !important; border: 0 !important;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <img width="100%" data-src="{{asset('front/images/cronograma-de-gestion-final.gif')}}" class="lazyload">
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
