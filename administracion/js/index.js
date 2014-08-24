$(document).ready(function() {
    $("#btnIniciarSession").click(function() {
        var usuario = $.trim($("#txtUsuario").val());
        var pass = $.trim($("#txtPass").val());
        if (usuario == "" || pass == "") {
            alertify.error("Todos los datos son requeridos");
        }
        else {
            var informacion = "usuario=" + usuario + "&pass=" + pass;
            $.get("validarLogin.php", informacion, function(respuesta) {
                if (respuesta == 1) {
                    document.location.href = 'informacion.php';
                }
                else if (respuesta == 0) {
                    alertify.error("Ingrese Usuario y Pasword correctos");
                }
                else {
                    alertify.error(respuesta);
                }
            });
        }
    });

    $("#tablaInformacion").hide();
    $("#lnkVentas").click(function() {
//        $("#tablaInformacion").slideUp('slow');
//        $("#tablaInformacion").load("dameInformacionVentas.php", function() {
//            $("#tablaInformacion").slideDown('slow');
//        });
    });

    $("#lnkCompras").click(function() {
//        $("#tablaInformacion").slideUp('slow');
//        $("#tablaInformacion").load("dameInformacionCompras.php", function() {
//            $("#tablaInformacion").slideDown('slow');
//        });
    });

    


});