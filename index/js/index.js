// Utilerias Rapidas
function validkey(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla == 8)
        return true; // 3
    if (tecla == 9)
        return true; // 3
    if (tecla == 11)
        return true; // 3
    patron = /[A-Za-z\s]/; // 4

    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
}
//==================
$(document).ready(function() {
    $('#c_habitaciones').numeric();
    $('#c_banos').numeric();
    $('#c_banos').numeric();
    $('#c_precio').numeric(".");
    $('#c_cp').numeric();
    $('#c_pisos').numeric();
    $('#c_telefono').numeric();
});

$("#btnvender").click(function() {
    $('#mdlvender').modal('show');
});

$("#btncomprar").click(function() {
    $('#mdlcomprar').modal('show');
});

$("#cancelarcompra").click(function() {
    alertify.set({labels: {
            ok: "Si",
            cancel: "No, espera"
        }});
    alertify.confirm("¿Estas seguro de cancelar la publicacion? Todo el contenido no guardado se perdera.", function(e) {
        if (e) {
            $("#c_colonia").val("");
            $("#c_precio").val("");
            $("#c_medidas").val("");
            $("#c_habitaciones").val("");
            $("#c_banos").val("");
            $("#c_pisos").val("");
            $("#chk_jardin").prop("checked", false);
            $("#chk_patio").prop("checked", false);
            $("#c_nombre").val("");
            $("#c_telefono").val("");
            $("#c_email").val("");
            $("#c_direccion").val("");
            $("#c_ccolonia").val("");
            $("#c_cp").val("");
            $('#mdlcomprar').modal('toggle');
        } else {
        }
    });

});

$("#cancelarventa").click(function() {
    alertify.set({labels: {
            ok: "Si",
            cancel: "No, espera"
        }});
    alertify.confirm("¿Estas seguro de cancelar la publicacion? Todo el contenido no guardado se perdera.", function(e) {
        if (e) {
            $('#mdlvender').modal('toggle');
        } else {
        }
    });
});

$("#guardarcompra").click(function() {

    var ctrlvalidacioncompra;
    $(".compdata").each(function() {
        var valor = $.trim($(this).val());
        if (valor == "") {
            ctrlvalidacioncompra = 1;
            return false;
        } else {
            ctrlvalidacioncompra = 0;
        }
    });

    if (ctrlvalidacioncompra != 0) {
        alertify.error("Todos los campos son obligatorios");
        return false;
    }

    var colonia = $.trim($("#c_colonia").val());
    var precio = $("#c_precio").val();
    var medidas = $("#c_medidas").val();
    var habitaciones = $("#c_habitaciones").val();
    var banos = $("#c_banos").val();
    var pisos = $("#c_pisos").val();
    var jardin = 0;
    var patio = 0;

    var chkjardin = $("#chk_jardin").is(":checked");
    var chkpatio = $("#chk_patio").is(":checked");

    
    if (chkjardin == true) {
        jardin = 1;
    }

    if (chkpatio == true) {
        patio = 1;
    }

    var nombre = $("#c_nombre").val();
    var telefono = $("#c_telefono").val();

    var email = $("#c_email").val();
    if (/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)) {
    } else {
        alertify.error("La direccion de correo electronico es invalida");
        $("#c_email").focusin();
        return false;
    }

    var direccion = $("#c_direccion").val();
    var ccolonia = $("#c_ccolonia").val();
    var cp = $("#c_cp").val();

    var datos = new FormData();

    datos.append('colonia', colonia);
    datos.append('precio', precio);
    datos.append('medidas', medidas);
    datos.append('habitaciones', habitaciones);
    datos.append('banos', banos);
    datos.append('pisos', pisos);
    datos.append('jardin', jardin);
    datos.append('patio', patio);
    datos.append('nombre', nombre);
    datos.append('telefono', telefono);
    datos.append('email', email);
    datos.append('direccion', direccion);
    datos.append('ccolonia', ccolonia);
    datos.append('cp', cp);


    $.ajax({
        url: 'comprar-guardardatos.php', //Url a donde la enviaremos
        type: 'POST', //Metodo que usaremos
        contentType: false, //Debe estar en false para que pase el objeto sin procesar
        data: datos, //Le pasamos el objeto que creamos con los archivos
        processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
        cache: false //Para que el formulario no guarde cache
    }).done(function(msg) {
        if (msg == 0) {
            $("#c_colonia").val("");
            $("#c_precio").val("");
            $("#c_medidas").val("");
            $("#c_habitaciones").val("");
            $("#c_banos").val("");
            $("#c_pisos").val("");
            $("#chk_jardin").prop("checked", false);
            $("#chk_patio").prop("checked", false);
            $("#c_nombre").val("");
            $("#c_telefono").val("");
            $("#c_email").val("");
            $("#c_direccion").val("");
            $("#c_ccolonia").val("");
            $("#c_cp").val("");
            $('#mdlcomprar').modal('toggle');
            alertify.success("La publicacion se realizo con exito");
        } else {
            alertify.alert("ERROR: " + msg);
        }
    });
});
