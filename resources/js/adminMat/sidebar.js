// | SIDEBAR ACTION |
$('.navbar #sidebar_action').on('click', function(e) {
    e.preventDefault();
    $('.navbar-brand').toggleClass('small');
    $('.sidebar').toggleClass('aside_small');
    $('.main').toggleClass('large');
});

// | ATIVA O SIDEBAR MOBILE |
$('#sidebar_action_mobile').on('click', function(e) {
    e.preventDefault();
    $('.sidebar').addClass('sidebar_app');
    $('.sidebar').css({ "display":"block" });
});

// | REMOVE O SIDEBAR MOBILE |
$('#sidebar_action_mobile_close').on('click', function(e) {
    e.preventDefault();
    $('.sidebar.sidebar_app').css({ "display":"none" });
    $('.sidebar').removeClass('sidebar_app');
});

// | RESPONSIVIDADE AUTOMATICA SIDEBAR |
function myFunction(x) {
    if (x.matches) {
        $('.sidebar').removeClass('sidebar_app');
        $('.sidebar').css({ "display":"block" });
        $('.main').css({ "width":"calc(100% - 280px)" });

    } else {
        $('.sidebar').css({ "display":"none" });
        $('.main').css({ "width":"100%" });
    }
}

var x = window.matchMedia("(min-width: 800px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
