
/*=============================================
EDITAR CLIENTE
=============================================*/
$(".tablas").on("click", ".btnEditarMarca", function(){

    var idMarca = $(this).attr("idMarca");

    var datos = new FormData();
    datos.append("idMarca", idMarca);

    $.ajax({

        url:"ajax/marcas.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success: function(respuesta){
            $("#idEditarMarca").val(respuesta["IDMarca"]);
            $("#editarNombreMarca").val(respuesta["Marca"]);
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