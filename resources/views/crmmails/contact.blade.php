Hola <i>{{ $demo->receiver }}</i>,
<p>Este correo fue enviado automáticamente.</p>
 
<p><u>Correo de contacto de la página</u></p>
 
<div>
<p><b>Nombre:</b>&nbsp;{{ $demo->name }}</p>
<p><b>Correo:</b>&nbsp;{{ $demo->email }}</p>
<p><b>Teléfono:</b>&nbsp;{{ $demo->phone }}</p>
<p><b>Mensaje:</b>&nbsp;{{ $demo->message }}</p>

</div>
Gracias,
<br/>
<i>{{ $demo->sender }}</i>