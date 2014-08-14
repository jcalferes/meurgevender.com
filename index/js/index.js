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
    alert("hola");
    var colonia = $("#c_colinia").val();
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
        type: 'GET', //Metodo que usaremos
        contentType: false, //Debe estar en false para que pase el objeto sin procesar
        data: datos, //Le pasamos el objeto que creamos con los archivos
        processData: false, //Debe estar en false para que JQuery no procese los datos a enviar
        cache: false //Para que el formulario no guarde cache
    }).done(function(msg) {

    });
});
