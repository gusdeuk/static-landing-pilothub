$(document).ready(function () {
  // Internal Modals handling

  openExternalModal = function (modalId, event, isFromOtherModal) {
    // ignoro comportamiento del link, si es que viene de un <a>
    if (event) {
      event.preventDefault();
    }

    // cerramos todos los modals que haya abiertos
    $(".modal").modal("hide");

    // abro nuevo modal despues de 1000 msecs si isFromOtherModal
    let delay = 0;
    if (isFromOtherModal) {
      delay = 1000;
    }

    setTimeout(function () {
      let urlModal = "../modals-landing/" + modalId + "/" + modalId + ".html";
      // load modal content
      $("#modal-landing-content").load(urlModal, function (
        response,
        status,
        xhr
      ) {
        $("#modal-landing").modal({ show: true });
        if (status == "error") {
          var msg = "Sorry but there was an error loading modal content: ";
          $("#modal-landing-content").html(
            '<div class="modal-error">' +
              msg +
              xhr.status +
              " " +
              xhr.statusText +
              "</div>"
          );
        }
      });
    }, delay);
  };
});
