<!DOCTYPE html>
<html>
<script type="text/javascript">

// check redirect string to open landing modals

let urlParams = new URLSearchParams(window.location.search);
let openLandingModalInHome = urlParams.get('open-modal');
let jumpString = '';
if (openLandingModalInHome) {
    jumpString = '?open-modal=' + openLandingModalInHome;
}

// redirect to mobile or desktop > pass modal param
if (screen.width <= 768) {
    document.location = 'views/home-mobile/' + jumpString;
} else { 
    document.location = 'views/home/' + jumpString;
}
</script>