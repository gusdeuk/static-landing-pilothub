$(document).ready(function () {
  // ------------------------------------------
  // boton guardar explicación > despliega
  $("#btn-guardar-explicacion").click(function () {
    $("#desplegable-guardar-explicacion").fadeIn("fast", function () {
      // Animation complete

    });

  });
  // ------------------------------------------
  // boton guardar explicación > oculta
  $("#desplegable-guardar-explicacion .btn-cerrar").click(function () {
    $("#desplegable-guardar-explicacion").fadeOut("fast", function () {
      // Animation complete

    });
  });
});
