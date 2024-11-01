(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note that this assume you're going to use jQuery, so it prepares
	 * the $ function reference to be used within the scope of this
	 * function.
	 *
	 * From here, you're able to define handlers for when the DOM is
	 * ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * Or when the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and so on.
	 *
	 * Remember that ideally, we should not attach any more than a single DOM-ready or window-load handler
	 * for any particular page. Though other scripts in WordPress core, other plugins, and other themes may
	 * be doing this, we should try to minimize doing that in our own work.
	 */

    $(document).ready(function(){
        $('.slider1').bxSlider({
            slideWidth: 200,
            minSlides: 2,
            maxSlides: 5,
            slideMargin: 10
        });
    });

    $(document).ready(function(){
        $('.slider2').bxSlider({
            slideWidth: 300,
            minSlides: 2,
            maxSlides: 2,
            slideMargin: 10
        });
    });

    $(document).ready(function(){
        $('.slider3').bxSlider({
            slideWidth: 5000,
            minSlides: 2,
            maxSlides: 4,
            slideMargin: 10
        });
    });
    $(document).ready(function(){
        $('.slider4').bxSlider({
            slideWidth: 300,
            minSlides: 2,
            maxSlides: 3,
            moveSlides: 1,
            slideMargin: 10
        });
    });
    $(document).ready(function(){
        $('.slider5').bxSlider({
            slideWidth: 300,
            minSlides: 3,
            maxSlides: 3,
            moveSlides: 3,
            slideMargin: 10
        });
    });
    $(document).ready(function(){
        $('.slider6').bxSlider({
            slideWidth: 300,
            minSlides: 2,
            maxSlides: 3,
            startSlide: 2,
            slideMargin: 10
        });
    });

})( jQuery );
