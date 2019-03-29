require([
		'jquery',
		'slick'
	], function($){
		$('.block-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: true,
		autoplay: true,
		autoplaySpeed: 2000,
	});
});
