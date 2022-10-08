$(document).ready(function () {
  // ****************************************************
  // EVENTOS WAYPOINT
  // ****************************************************

  // * -------------------------------------------------------
  // elementos a manipular con waypoints
  const $elementoBotonTramites = $("#boton-float-tramites");
  const $elementoBotonInstagram = $("#boton-float-instagram");
  const $elementoLogoInstagramWelcome = $("#logo-instagram-welcome");
  const $elementoLogoInstagramFooter = $("#logo-instagram-footer");

  // * -------------------------------------------------------
  // animate instagram logo by default
  setTimeout(function () {
    $elementoLogoInstagramWelcome.addClass("animated bounceIn fast");
  }, 2000);

  // * -------------------------------------------------------
  // waypoint LOGO INSTAGRAM WELCOME
  var waypointEventLogoInstagramWelcome = new Waypoint({
    element: document.getElementById("logo-instagram-welcome"),
    handler: function (direction) {
      if (direction == "down") {
        // elimino todas las clases que le meti
        removeElementoBotonInstagramClasses();
        $elementoLogoInstagramWelcome.removeClass("animated bounceIn fadeOut");

        // agrego la clase de animacion deseada
        setTimeout(function () {
          $elementoBotonInstagram.addClass("instagram-appear");
        }, 500);
        $elementoLogoInstagramWelcome.addClass("animated fadeOut");
      }
      if (direction == "up") {
        // elimino todas las clases que le meti
        removeElementoBotonInstagramClasses();
        $elementoLogoInstagramWelcome.removeClass("animated bounceIn fadeOut");
        // agrego la clase de animacion deseada

        $elementoBotonInstagram.addClass("instagram-hide");
        setTimeout(function () {
          $elementoLogoInstagramWelcome.addClass("animated fadeIn");
        }, 1000);
      }
      //console.log("logo-instagram-welcome > " + direction );
    },
    offset: "50%",
  });

  // * -------------------------------------------------------
  // waypoint SECCION BIENVENIDOS
  var waypointEventBienvenidos = new Waypoint({
    element: document.getElementById("section-bienvenidos"),
    handler: function (direction) {
      if (direction == "down") {
        // elimino todas las clases que le meti
        $elementoBotonTramites.removeClass("animated fadeOutUp fadeInUp");
        // agrego la clase de animacion deseada
        $elementoBotonTramites.addClass("animated fadeInUp");
      }
      if (direction == "up") {
        // elimino todas las clases que le meti
        $elementoBotonTramites.removeClass("animated fadeOutUp fadeInUp");
        // agrego la clase de animacion deseada
        $elementoBotonTramites.addClass("animated fadeOutUp");
      }
      // console.log("section-bienvenidos > " + direction );
    },
    offset: "70%",
  });

  // * -------------------------------------------------------
  // waypoint SECTION FOOTER
  var waypointEventFooter = new Waypoint({
    element: document.getElementById("section-footer"),
    handler: function (direction) {
      if (direction == "up") {
        // elimino todas las clases que le meti
        $elementoBotonTramites.removeClass("animated fadeOutUp fadeInUp");
        // agrego la clase de animacion deseada
        $elementoBotonTramites.addClass("animated fadeInUp");
      }
      // console.log("section-footer  >> " + direction );
    },
    offset: 0,
  });

  // * -------------------------------------------------------
  // waypoint BANNER FOOTER
  var waypointEventBannerFooter = new Waypoint({
    element: document.getElementById("section-banner-footer"),
    handler: function (direction) {
      if (direction == "down") {
        // elimino todas las clases que le meti
        $elementoBotonTramites.removeClass("animated fadeOutUp fadeInUp");
        // agrego la clase de animacion deseada
        $elementoBotonTramites.addClass("animated fadeOutUp");
      }

      // console.log("section-banner-footer  >> " + direction );
    },
    // dispara un poco antes de que llegue >> hit 50% from top of window
    offset: "50%",
  });

  // * -------------------------------------------------------
  // waypoint LOGO INSTAGRAM FOOTER
  var waypointEventLogoInstagramFooter = new Waypoint({
    element: document.getElementById("logo-instagram-footer-container"),
    handler: function (direction) {
      if (direction == "up") {
        // elimino todas las clases que le meti
        removeElementoBotonInstagramClasses();
        $elementoLogoInstagramFooter.removeClass(
          "animated fadeOutDown fadeInUp"
        );
        // agrego la clase de animacion deseada
        setTimeout(function () {
          $elementoBotonInstagram.addClass("instagram-appear-bottom");
        }, 1000);

        $elementoLogoInstagramFooter.addClass("animated fadeOutDown");
      }
      if (direction == "down") {
        // elimino todas las clases que le meti
        removeElementoBotonInstagramClasses();
        $elementoLogoInstagramFooter.removeClass(
          "animated fadeOutDown fadeInUp"
        );
        // agrego la clase de animacion deseada
        $elementoBotonInstagram.addClass("instagram-hide-bottom");
        setTimeout(function () {
          $elementoLogoInstagramFooter.addClass("animated fadeInUp");
        }, 1000);
      }
      //console.log("logo-instagram-footer > " + direction );
    },
    offset: "90%",
  });

  function removeElementoBotonInstagramClasses() {
    $elementoBotonInstagram.removeClass(
      "instagram-hide-bottom  instagram-appear-bottom instagram-appear instagram-hide"
    );
  }

  // * -------------------------------------------------------
  // INICIALIZACION WOW
  // * -------------------------------------------------------
  // data-wow-duration: Change the animation duration
  // data-wow-delay: Delay before the animation starts
  // data-wow-offset: Distance to start the animation (related to the browser bottom)
  // data-wow-iteration: Number of times the animation is repeated

  new WOW().init({
    boxClass: "wow", // default
    animateClass: "animated", // default
    offset: 0, // default
    mobile: true, // default
    live: true, // default
  });

  // * -------------------------------------------------------
  // OPEN MODALS by if (Only for modals-LANDING)
  // * -------------------------------------------------------
  // check redirect string to open landing modals

  let urlParams = new URLSearchParams(window.location.search);
  let openLandingModalId = urlParams.get("open-modal");

  if (openLandingModalId) {
    // abro nuevo modal despues de 1000 msecs
    setTimeout(function () {
      openExternalModal(openLandingModalId);
    }, 500);
  }
});
