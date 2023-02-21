@extends('front.layouts.app')

@section('title_meta')
    Software CRM en español para prospección | Términos de contrato
@endsection
@section('description_meta')
    Términos y condiciones de contratación
@endsection

@section('meta_og')
    <meta name="robots" content="noodp"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Software CRM en español para prospección - DataCRM"/>
    <meta property="og:description"
          content="Prueba gratis por 15 días nuestro software CRM para prospección. Soporte y capacitación en español."/>
    <meta property="og:url" content="https://www.datacrm.com/software-crm/"/>
    <meta property="og:site_name" content="Software CRM en Colombia, Fuerza de Ventas – DATACRM"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description"
          content="Prueba gratis por 15 días nuestro software CRM para prospección. Soporte y capacitación en español."/>
    <meta name="twitter:title" content="Software CRM en español para prospección - DataCRM"/>
@endsection

@section('content')
    <div class="container p-0 pt-3">
        <div class="row pt-5 mt-5 section-resize section-init-functions">
            <embed src="{{asset('upload/ans/ACUERDO_DE_NIVELES_DE_SERVICIO_DATACRM_VF2021.pdf')}}" 
            type="application/pdf" 
            width="100%" 
            height="600px" />
        </div>
    </div>
@endsection