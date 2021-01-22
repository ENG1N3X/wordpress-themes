$(function() {

    function initSliders() {
        $(".test-slider.owl-carousel").owlCarousel({
            dots: true,
            nav: true,
            items: 2,
            onInitialized: function() {
                console.log("Index slider initialized.")
            }
        });
    }

    (function () {
        initSliders()
     }());
})