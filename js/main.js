// Este javascript es para HOME DEKTOP Y HOME MOBILE

$(document).ready(function(){

    // init pop overs
    $('[data-toggle="popover"]').popover({
       // trigger:'click focus',
        template: '<div class="popover popover-pilothub" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
    })

    //inicializo tooltip

    $(function () {
        $('[data-toggle="tooltip"]').tooltip({
           // trigger:'click focus'
        })
      })

})