// eslint-disable-next-line import/no-extraneous-dependencies, no-unused-vars
import slick from 'slick-carousel';
// eslint-disable-next-line import/no-extraneous-dependencies
import $ from 'jquery';

// eslint-disable-next-line func-names
$(document).ready(function () {
	$('.testimonials__slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: false,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					infinite: true,
					dots: true,
				},
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					dots: true,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					dots: true,
				},
			},
		],
	});
	$('.advantages__slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev">Previous</button>',
		nextArrow: '<button type="button" class="slick-next">Next</button>',
	});
});
