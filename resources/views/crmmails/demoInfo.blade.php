Hola <i>{{ $demo->receiver }}</i>,
<p>Este correo fue enviado automáticamente.</p>
 
<p><u>Información complemetaria en la creación de un demo</u></p>
<p> {{$demo->rdstation}} </p>
 
<div>
<p><b>Nombre:</b>&nbsp;{{ $demo->nombre }}</p>
<p><b>Correo:</b>&nbsp;{{ $demo->email }}</p>
<p><b>Teléfono:</b>&nbsp;{{ $demo->telefono }}</p>
<p><b>Ciudad:</b>&nbsp;{{ $demo->ciudad }}</p>
<p><b>Usuarios:</b>&nbsp;{{ $demo->usuarios }}</p>
<p><b>Empresa:</b>&nbsp;{{ $demo->company }}</p>

</div>
Gracias,
<br/>
<i>{{ $demo->sender }}</i>