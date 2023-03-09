<html>
    <head>
        <title></title>
    </head>
    <body class='scayt-enabled'>
    <div style='background-color:#EEE;'>&nbsp;
    <table align='center' style='width:600px;height:300px;'>
        <tbody>
            <tr>
                <td bgcolor='#FFFFFF'>
                <h1 style='text-align:center;'><img alt='' src='https://www.datacrm.com/front/images/logo.png' style='width:225px;height:70px;' /></h1>
                <div style='margin-left:40px;'><span style='font-family:verdana,geneva,sans-serif;'><span dir='ltr'>Hola,&nbsp;<br />
                <span style='font-family:verdana,geneva,sans-serif;'><span dir='ltr'> Su demo ha sido creado:<br /> </span>
                <br/>
                        <span dir='ltr' style="line-height : 15px; font-weight: bold;">Datos de acceso:</span><br/><br />
                        <span dir='ltr' style="line-height : 15px; font-weight: bold;">Correo electrónico:&nbsp;</span>{{ $demo->email }}<br />
                        <span dir='ltr' style="line-height : 15px; font-weight: bold;">Contraseña:&nbsp;</span>{{ $demo->password }}<br/><br/>
                        <center><a style="text-decoration: none; padding: 10px; font-weight: 600;font-size: 20px;color: #ffffff; background-color: #f58756; border-radius: 6px;" class="boton_personalizado" target="_blank" href="{{ $demo->url }}">INGRESAR</a></center>
                    
                <br/><br/>
                <span style='font-family:verdana, geneva, sans-serif;'>Este correo fue enviado autom&aacute;ticamente.</span></div>
                <div style='margin-left:400px;'><span style='font-family:verdana, geneva, sans-serif;'><strong>Saludos, Equipo DataCRM</strong></span><br />
                &nbsp;</div>
                </td>
            </tr>
        </tbody>
    </table>
    <br />
    &nbsp;</div>
</html>