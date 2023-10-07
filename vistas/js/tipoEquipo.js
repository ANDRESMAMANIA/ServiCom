
/*=============================================
EDITAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnEditarTipoEquipo", function(){

    var idTipoEquipo = $(this).attr("idTipoEquipo");

    var datos = new FormData();
    datos.append("idTipoEquipo", idTipoEquipo);

    $.ajax({

        url:"ajax/tipoEquipo.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success: function(respuesta){
            $("#idEditarMarca").val(respuesta["IDMarca"]);
            $("#editarNombreTipoEquipo").val(respuesta["TipoEquipo"]);
        }

    })

})

/*=============================================
ELIMINAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnEliminarCliente", function(){

    var idCliente = $(this).attr("idCliente");

    swal({
        title: '¿Está seguro de borrar el cliente?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar cliente!'
    }).then(function(result){
        if (result.value) {

            window.location = "index.php?ruta=clientes&idCliente="+idCliente;
        }

    })

})