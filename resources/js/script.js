// Tooltip dan scroll
$(function () {
  $('[data-toggle="tooltip"]').tooltip({container: 'body'})
})

$(document).ready(function() {
    smoothScroll.init({
        speed: 800,
        easing: 'easeInOutCubic',
        offset: 40
    });

});

// Navbar
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("attached");
    } else {
        $(".navbar-fixed-top").removeClass("attached");
    }
});

// Autofocus ketika modal muncul
$('.modal').on('shown.bs.modal', function () {
    $(this).find('[autofocus]').focus();
});

function nextTab(active) {
    $(active).next().find('a[data-toggle="tab"]').click();
}

function prevTab(active) {
    $(active).prev().find('a[data-toggle="tab"]').click();
}

// Wizard
$(".next-step").click(function () {
    var $active = $('.wizard .nav-tabs li.active');

    nextTab($active);
});

$(".prev-step").click(function () {
    var $active = $('.wizard .nav-tabs li.active');

    prevTab($active);
});
