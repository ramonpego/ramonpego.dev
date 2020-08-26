// | ASIDE ACTION |
$('.toggle-asideUser').on('click', function(e) {
    e.preventDefault();
    $('.aside_back').toggleClass('none');
    $('.aside').toggleClass('aside_large');
});

// | ASIDE ACTION |
$('.toggle-asideNavbar').on('click', function(e) {
    e.preventDefault();
    $('#asideNavbar').toggleClass('none');
});
