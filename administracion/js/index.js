$(document).ready(function() {
    $("#btnIniciarSession").click(function() {
        var usuario = $.trim($("#txtUsuario").val());
        var pass = $.trim($("#txtPass").val());
        if (usuario == "" || pass == "") {

        }
    });



    $("#tablaInformacion").hide();
    $("#lnkVentas").click(function() {
        $("#tablaInformacion").slideUp('slow');
        $("#tablaInformacion").load("dameInformacionVentas.php", function() {
            $("#tablaInformacion").slideDown('slow');
        });
    });

    $("#lnkCompras").click(function() {
        $("#tablaInformacion").slideUp('slow');
        $("#tablaInformacion").load("dameInformacionCompras.php", function() {
            $("#tablaInformacion").slideDown('slow');
        });
    });

});