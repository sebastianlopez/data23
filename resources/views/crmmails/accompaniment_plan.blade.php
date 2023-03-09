<i>Hola</i>
<p>Este correo fue enviado automáticamente.</p>
 
<p><u>Correo de pago por PayU</u></p>
 
<div>
    <p>
        Se realiz&oacute; un pago desde la p&aacute;gina web a nombre de <strong>{{ $demo->nombre }}</strong> 
        con email: <strong>{{$demo->email}}</strong>
    </p>
    <p>
        El plan fu&eacute; <strong>{{ $demo->plan_name }}</strong>, por un valor total de <strong>${{$demo->totalPagofinal}}</strong> {{$demo->currency}}
    </p>
    <p>
        Datos de la tarjeta:
        <ul>
            <li>Pagador: <strong>{{$demo->buyer_name}}</strong></li>
            <li>Documento identidad: <strong>{{$demo->cc}}</strong></li>
            <li>Tarjeta: <strong>{{$demo->card_type}}</strong></li>
            <li>Total a pagar: <strong>${{$demo->totalPagofinal}}</strong> {{$demo->currency}}</li>
            <li>Nombre del Plan: <strong>{{$demo->plan_name}}</strong></li>
            <li>Telefono: <strong>{{$demo->phone_number}}</strong></li>
        
        </ul>
    </p>
</div>
Gracias
<br/>
<i>{{ $demo->sender }}</i>
