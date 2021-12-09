/*==============================
BUSCADOR                    
================================*/
$("#buscador input").change( function(){
    var busqueda = $("#buscador input").val();
    var expresion = /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;
    if(!expresion.test(busqueda)){
        $("#buscador input").val("");
    }else{
        var evaluarBusqueda = busqueda.replace(/ /g, "-");
        var rutaBuscador =
    }
})

