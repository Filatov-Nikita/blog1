$(function () {
    $('.menuS').fnMenu();
$('.left_panel .menu ul.master li.hover').on('click', function() {
		var answer = $(this).find('.slave').stop(true).slideToggle();
	});
	
		var menu = $('.main .left_panel');
	$(document).on('scroll', function() {
		menu.removeClass('fixed');
		if($(document).scrollTop() > 0) {
			menu.addClass('fixed');
			console.log(1);
		}
	});
	
});
