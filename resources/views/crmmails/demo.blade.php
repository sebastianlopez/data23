Hola <i>{{ $demo->receiver }}</i>,
<p>Este correo fue enviado automáticamente.</p>
 
<p><u>Nuevo crm en creación <p> {{$demo->rdstation}} </p> </u></p>
 
<div>
<p><b>Correo:</b>&nbsp;{{ $demo->email }}</p>
<p><b>Empresa:</b>&nbsp;{{ $demo->company }}</p>
<p><b>Fecha:</b>&nbsp;{{ $demo->date }}</p>
</div>

Gracias,
<br/>
<i>{{ $demo->sender }}</i>