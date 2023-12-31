(function ( $ ) {
	class SlickSlider {
		constructor() {
			// this.initSlider();
		}

		initSlider() {
			$('.posts-slider ').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
				lazyLoad: 'ondemand',
				autoplaySpeed: 2000,
				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 1,
							infinite: true,
							dots: true,
						},
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
						},
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						},
					},
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				],
			});
		}
	}

	new SlickSlider();
} )( jQuery );
