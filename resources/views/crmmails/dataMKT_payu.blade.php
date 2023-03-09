<i>Hola</i>
<p>Este correo fue enviado automáticamente.</p>
 
<p><u>Correo de pago por PayU</u></p>
 
<div>
    <p>
        Se realiz&oacute; un pago desde la p&aacute;gina web a nombre de <strong>{{ $demo->buyer_name }}</strong> 
        con email: <strong>{{$demo->email}}</strong> y documento: <strong>{{$demo->cc}}</strong>
    </p>
    <p>
        El plan fu&eacute; <strong>{{ $demo->plan }}</strong>, por un valor total de <strong>${{$demo->total_payment}}</strong>
    </p>
    <p>
        Datos de la tarjeta:
        <ul>
            <li>Pagador: <strong>{{$demo->buyer_name}}</strong></li>
            <li>Documento identidad: <strong>{{$demo->cc}}</strong></li>
            <li>Tarjeta: <strong>{{$demo->card_type}}</strong></li>
            <li>Nombre del Plan: <strong>{{$demo->plan_name}}</strong></li>
            <li>Tipo de Plan: <strong>{{$demo->plan}}</strong></li>
            @for ($i = 0; $i < count($demo->campaigns); $i++)
                <li>Campañas {{$demo->campaigns[$i]}}: <strong>{{$demo->details[$i]}} {{$demo->currency}}</strong></li>
            @endfor
            <li>Total a pagar: <strong>${{$demo->total_payment}}</strong></li>
            <li>Telefono: <strong>{{$demo->phone}}</strong></li>
        
        </ul>
    </p>
</div>
Gracias
<br/>
<i>{{ $demo->sender }}</i>
