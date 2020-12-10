function checkAcceptCookies() {
    if (localStorage.acceptCookies == 'true') {
    } else {
        $('#div-cookies').show();
    }
}
function acceptCookies() {
    localStorage.acceptCookies = 'true';
    $('#div-cookies').hide();
}
$(document).ready(function() {
    checkAcceptCookies();
});