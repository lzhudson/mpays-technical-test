import $ from 'jquery';

$(document).ready(function () {
	$('.header__hamburguer-menu').on('click', function () {
		$('.header__nav').addClass('header__nav--show');
		$('body').css('overflow-y', 'hidden');
	});
	$('.header__close-menu').on('click', function () {
		$('.header__nav').removeClass('header__nav--show');
		$('body').css('overflow-y', 'scroll');
	});
});
