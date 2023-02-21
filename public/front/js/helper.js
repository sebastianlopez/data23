/*
    29-09-2022
    Helpers del sitio web
    Funciones estandares
    nombre : helper[nombre de la funcion]
    descripcion : devuleve el url ubicacion relativo y no abosulto                  
*/
function helperBuildURL(){
    let  mystring = "";
    let  myUrl = "";
    let  myHost = "";
    let  myWindowOrigin = "";

    myHost = window.location.hostname;
    let myArray = myHost.split('.');
    //
    // Si no tiene www. el url se le inserta para luego quitarse y poder evaluar el segudo segmento
    // https://datacrm.com se convierte en www.datacrm.com
    // problema que se presenta mucho en produccion con clientes con accesos directos
    //
    if (myArray[0].toLowerCase() === "datacrm"){
        myArray.unshift('www');
        myWindowOrigin = 'https://' + myArray[0] + '.' + myArray[1] + '.' + myArray[2];
    } else{
        myWindowOrigin = window.origin ;
    }
    
    myArray.shift();
    myArray.pop();

    myUrl = myArray.toString().replace(",",".");

    if (myUrl === "datacrm"){        
        mystring = myWindowOrigin + '/';
    }

    myUrl = window.location.origin + window.location.pathname;
    let myindex = myUrl.indexOf("public/");
    if (myindex != -1){
        mystring = myUrl.substring(0, myindex + 7)
    }
    
    return mystring;
}