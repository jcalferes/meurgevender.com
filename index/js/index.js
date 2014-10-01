//Variables globales============================================================
var archivos;
var calculando = 3;
//==============================================================================
// Utilerias Rapidas============================================================
$('.carousel').carousel({
    interval: 5000 //changes the speed
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.scrollUp').fadeIn();
    } else {
        $('.scrollUp').fadeOut();
    }
});

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

document.getElementById('files').addEventListener('change', handleFileSelect, false);
function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object
    archivos = files;
    // files is a FileList of File objects. List some properties.
    var output = [];
    if (archivos.length <= calculando) {
        for (var i = 0, f; f = files[i]; i++) {
            var fileName = f.name;
            var fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
            if (fileExtension !== "jpg" && fileExtension !== "png" && fileExtension !== "gif") {
                alertify.error("Solo puedes subir archivos .jpg, .gif y .png");
                $("#files").val("");
                $("#list-files").val("");
                break;
            } else {
                output.push('<li><strong>', escape(f.name), '</strong> (', fileExtension || 'n/a', ') - ',
                        f.size, ' bytes, last modified: ',
                        f.lastModifiedDate.toLocaleDateString(), '</li>');
            }
        }
        document.getElementById('list-files').innerHTML = '<ul>' + output.join('') + '</ul>';
    } else {
        alertify.error("Solo puedes Subir " + calculando + " imágenes");
        $("#files").val("");
        $("#list-files").val("");
    }

}
//==============================================================================
$(document).ready(function () {
    $('.scrollUp').click(function () {
        $("html, body").animate({scrollTop: 0}, 500);
        return false;
    });

    $('a.ancla').click(function (e) {
        e.preventDefault();
        enlace = $(this).attr('href');
        $('html, body').animate({scrollTop: $(enlace).offset().top}, 500);
    });


    $('#c_habitaciones').numeric();
    $('#c_banos').numeric();
    $('#c_banos').numeric();
    $('#c_precio').numeric(".");
    $('#c_cp').numeric();
    $('#c_pisos').numeric();
    $('#c_telefono').numeric();

    $('#v_habitaciones').numeric();
    $('#v_banos').numeric();
    $('#v_banos').numeric();
    $('#v_precio').numeric(".");
    $('#v_cp').numeric();
    $('#v_pisos').numeric();
    $('#v_telefono').numeric();

});

$("#btnvender").click(function () {
    $('#mdlvender').modal('show');
});

$("#btncomprar").click(function () {
    $('#mdlcomprar').modal('show');
});

$("#cancelarcompra").click(function () {
    alertify.set({labels: {
            ok: "Si",
            cancel: "No, espera"
        }});
    alertify.confirm("¿Estás seguro de cancelar la publicación? Todo el contenido no guardado se perderá.", function (e) {
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

$("#cancelarventa").click(function () {
    alertify.set({labels: {
            ok: "Si",
            cancel: "No, espera"
        }});
    alertify.confirm("¿Estás seguro de cancelar la publicación? Todo el contenido no guardado se perderá.", function (e) {
        if (e) {
            $('#mdlvender').modal('toggle');
        } else {
        }
    });
});

$("#guardarcompra").click(function () {

    var ctrlvalidacioncompra;
    $(".compdata").each(function () {
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
        alertify.error("La dirección de correo electrónico es inválida");
        $("#c_email").focus();
        return false;
    }

    var direccion = 0;
    var ccolonia = 0;
    var cp = 0;

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
    }).done(function (msg) {
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

            $("#collapseOnex").collapse('show');
            $("#collapseTwox").collapse('hide');

            alertify.success("La publicación se realizó con éxito");
        } else {
            alertify.alert("ERROR: " + msg);
        }
    });
});

$("#guardarventa").click(function () {

    var ctrlvalidacionventa;
    $(".ventdata").each(function () {
        var valor = $.trim($(this).val());
        if (valor == "") {
            ctrlvalidacionventa = 1;
            return false;
        } else {
            ctrlvalidacionventa = 0;
        }
    });

    if (ctrlvalidacionventa != 0) {
        alertify.error("Todos los campos son obligatorios");
        return false;
    }

    var colonia = $.trim($("#v_colonia").val());
    var precio = $("#v_precio").val();
    var medidas = $("#v_medidas").val();
    var habitaciones = $("#v_habitaciones").val();
    var banos = $("#v_banos").val();
    var pisos = $("#v_pisos").val();
    var jardin = 0;
    var patio = 0;
    var internet = 0;
    var itelefono = 0;
    var tvpaga = 0;

    var chkjardin = $("#vhk_jardin").is(":checked");
    var chkpatio = $("#vhk_patio").is(":checked");

    var chktelefono = $("#vhk_telefono").is(":checked");
    var chkinternet = $("#vhk_internet").is(":checked");
    var chktvpaga = $("#vhk_tvpaga").is(":checked");


    if (chkjardin == true) {
        jardin = 1;
    }

    if (chkpatio == true) {
        patio = 1;
    }

    if (chktelefono == true) {
        itelefono = 1;
    }

    if (chkinternet == true) {
        internet = 1;
    }

    if (chktvpaga == true) {
        tvpaga = 1;
    }

    if ($("#files").val() == "") {
        alertify.error("Debes seleccionar al menos una imagen");
        return false;
    }

    var nombre = $("#v_nombre").val();
    var telefono = $("#v_telefono").val();

    var email = $("#v_email").val();
    if (/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)) {
    } else {
        alertify.error("La dirección de correo electrónico es inválida");
        $("#v_email").focus();
        return false;
    }

    var direccion = 0;
    var ccolonia = 0;
    var cp = 0;

    var datos = new FormData();

    for (i = 0; i < archivos.length; i++) {
        datos.append('archivo' + i, archivos[i]);
    }

    datos.append('colonia', colonia);
    datos.append('precio', precio);
    datos.append('medidas', medidas);
    datos.append('habitaciones', habitaciones);
    datos.append('banos', banos);
    datos.append('pisos', pisos);
    datos.append('jardin', jardin);
    datos.append('patio', patio);
    datos.append('itelefono', itelefono);
    datos.append('internet', internet);
    datos.append('tvpaga', tvpaga);
    datos.append('nombre', nombre);
    datos.append('telefono', telefono);
    datos.append('email', email);
    datos.append('direccion', direccion);
    datos.append('ccolonia', ccolonia);
    datos.append('cp', cp);

    $.ajax({
        url: 'vender-guardardatos.php', //Url a donde la enviaremos
        type: 'POST', //Metodo que usaremos
        contentType: false, //Debe estar en false para que pase el objeto sin procesar
        data: datos, //Le pasamos el objeto que creamos con los archivos
        processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
        cache: false //Para que el formulario no guarde cache
    }).done(function (msg) {
        if (msg == 0) {
            $("#v_colonia").val("");
            $("#v_precio").val("");
            $("#v_medidas").val("");
            $("#v_habitaciones").val("");
            $("#v_banos").val("");
            $("#v_pisos").val("");
            $("#vhk_jardin").prop("checked", false);
            $("#vhk_patio").prop("checked", false);
            $("#vhk_telefono").prop("checked", false);
            $("#vhk_internet").prop("checked", false);
            $("#vhk_tvpaga").prop("checked", false);
            $("#files").val("");
            archivos;
            $("#list-files").val("");
            $("#v_nombre").val("");
            $("#v_telefono").val("");
            $("#v_email").val("");
            $("#v_direccion").val("");
            $("#v_ccolonia").val("");
            $("#v_cp").val("");
            $('#mdlvender').modal('toggle');

            $("#collapseOne").collapse('show');
            $("#collapseTwo").collapse('hide');

            alertify.success("La publicación se realizó con éxito");
        } else {
            alertify.alert("ERROR: " + msg);
        }
    });

});

$("#box_11").click(function () {
    $("#collapseOnex").collapse('show');
    $("#collapseTwox").collapse('hide');
});

$("#box_12").click(function () {
    $("#collapseOnex").collapse('hide');
    $("#collapseTwox").collapse('show');
});

$("#box_21").click(function () {
    $("#collapseOne").collapse('show');
    $("#collapseTwo").collapse('hide');
});

$("#box_22").click(function () {
    $("#collapseOne").collapse('hide');
    $("#collapseTwo").collapse('show');
});