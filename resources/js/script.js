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

$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("attached");
    } else {
        $(".navbar-fixed-top").removeClass("attached");
    }
});
