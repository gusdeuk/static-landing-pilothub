$(document).ready(function () {
  //----------------------------------------------
  $(".btn-tutorial").click(function () {
    $("#desplegable-tutorial-cma").fadeIn("fast", function () {});
  });

  $("#desplegable-tutorial-cma .btn-cerrar").click(function () {
    $("#desplegable-tutorial-cma").fadeOut("fast", function () {});
  });
  //-----------------------------------------------
});
