import { sidebar } from './sidebar';
import { aside } from './aside';

// | LOADER |
$(document).ready(function() {
    $('.loader_content').remove();
});

// | BACK TO TOP |
$('#topo').on('click', function (e) {
    e.preventDefault();
    $(window).scrollTop(0);
});

// | TOOLTIP |
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

// | POPOVER |
$(function () {
    $('[data-toggle="popover"]').popover()
});

