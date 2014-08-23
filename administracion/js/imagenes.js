$(document).ready(function() {
    $("#table").load("dameImagenesTabla.php", function() {
        $('.parent-container').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image'
                    // other options
        });
    });
});


function activarImagen(id) {
    $("#table").load("activarImagen.php?id=" + id, function() {
        $('.parent-container').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image'
                    // other options
        });
    });
}

function descartivarImagem(id) {
    $("#table").load("desactivarImagen.php?id=" + id, function() {
        $('.parent-container').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image'
                    // other options
        });
    });
}