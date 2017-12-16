$(function () {
    $('.menuS').fnMenu();
    $('.menu .bookmark ul.outMenu li a').on('click', function(e) {
        e.preventDefault();
        var answer = $(this).parent().find('.innerMenu').stop(true).slideToggle();
    });
	
		var menu = $('.main .left_panel');
	$(document).on('scroll', function() {
		menu.removeClass('fixed');
		if($(document).scrollTop() > 0) {
			menu.addClass('fixed');
			
		}
	});
	
});
