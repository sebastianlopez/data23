<div class="modal fade" id="modalVerificationEmail" tabindex="1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center  typ-montserrat txt-blackgray" style="font-size:16px;" id="exampleModalLabel" >¡Vaya! Parece que <span class="txt-black">tu correo está activo en otro CRM,</span> por favor confirma estos datos para validar que eres tú y habilitarte el acceso.</h5>
      </div>
      <div class="modal-body">
        <form id="verificationEmailSent">
        <input type="hidden" id="_token" value="{{ csrf_token() }}">
        <input type="hidden"  value="" class="crmsEmail">
        <input type="hidden"  value="" class="usersEmail">
        <input type="hidden"  value="" class="emailEmail">
        <input type="hidden"  value="" class="loginEmail">
          <center>
            <div class="col-10 col-sm-8  mt-3">
                <input type="email" style="border: none; border-bottom: 4px solid #41c3ac; border-radius: 10px;padding: 10px;width: 100%;" name="emailVerification" placeholder="Correo electrónico" class="text-center typ-os-regular txt-gray  f-sz-sm pt-0">
            </div>
            <div class="col-10 col-sm-8  mt-3">
                <input type="phone" name="phoneVerification" placeholder="Teléfono" class="text-center input-contacto typ-os-regular f-sz-sm pt-0 txt-gray"> 
            </div>  
          </center>
         <div>
         <div style="margin-top:8px; color:#d24949; font-size:1em;">
            <center><span class="typ-os-regular" id="idMsgEmail"></span></center>
        </div>          
      </div>
      </div>
      <div class="modal-footer" style="align-items: center; justify-content: center;">  

        <input type="submit" value="ENVIAR" style="background:#f58756;  border:0px; width: 20px !important; height: 40px !important; color:white; cursor:pointer;" class="verificationEmailSent col-8 p-2 text-uppercase typ-os-regular f-sz-sm mt-3">
      </div>
      </form>
      </div>
  </div>
</div>