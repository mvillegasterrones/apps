$(".card .system-card").click(function() {
    // Remover la clase "item-selected" de todos los elementos
    $(".card .system-card").removeClass("item-selected")
// Remover la clase "d-block" de todos los iconos
    $(".card .system-card i").removeClass("d-block").addClass("d-none");
    // Agregar la clase "item-selected" al elemento clicado
    $(this).addClass("item-selected")
    // Cambiar la clase del icono de "d-none" a "d-block" en el elemento clicado
    $(this).find("i").removeClass("d-none").addClass("d-block");
})