$(document).ready(function() {

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