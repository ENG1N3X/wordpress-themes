$(function () {
	function initSliders() {
		$(".test-slider.owl-carousel").owlCarousel({
			dots: true,
            nav: false,
            items: 1,
			responsiveClass: true,
			responsive: {
                1023: {
					items: 2,
					nav: true,
				}
			},
			onInitialized: function () {
				console.log("Index slider initialized.");
			},
		});
	}

	(function () {
		initSliders();
	})();
});
