$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#go-top').fadeIn(300);
            $('#go-top').removeClass('hide');
        } else {
            $('#go-top').fadeOut(300);
            $('#go-top').addClass('hide');
        }
    });

    $('.go-top').click(function(event) {
        event.preventDefault();

        $('html, body').animate({scrollTop: 0}, 300);
    })
});