$(function () {
	$('.hamburger').click(function () {
        if (!$('.hamburger').hasClass("open"))
            $('.hamburger').toggleClass('open');
        else
            $('.hamburger').removeClass('open');
    });
});