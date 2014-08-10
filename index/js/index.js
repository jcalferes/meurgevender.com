$(document).ready(function() {

});

$("#btnvender").click(function() {
    $('#mdlvender').modal('show');
});

$("#btncomprar").click(function() {
    $('#mdlcomprar').modal('show');
});

$("#cancelarcompra").click(function() {
    alertify.confirm("¿Estas seguro de cancelar la publicacion?", function(e) {
        if (e) {
            $('#mdlcomprar').modal('toggle');
        } else {
        }
    });

});

$("#cancelarventa").click(function() {
    alertify.confirm("¿Estas seguro de cancelar la publicacion?", function(e) {
        if (e) {
            $('#mdlvender').modal('toggle');
        } else {
        }
    });
});