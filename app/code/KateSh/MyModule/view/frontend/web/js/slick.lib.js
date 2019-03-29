define([
    'jquery',
    'slick'
], function ($) {
    return function(config, element) {
        var defaultValues = {
            slidesToShow: 3,
			slidesToScroll: 1,
			dots: true,
			autoplay: true,
			autoplaySpeed: 2000,
        };

        $(element).slick($.extend({}, defaultValues, config));
    };
});