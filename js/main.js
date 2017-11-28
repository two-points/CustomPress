jQuery(document).ready(function(jQuery) {

    "use strict";

    jQuery('#primary-menu').slicknav({
        appendTo: '.site-header',
    });

     // For Fixed header & Scroll to top
    jQuery(window).on("scroll resize", function() {
        if (jQuery(window).scrollTop() >= 500) {
            jQuery(".scroll-to-top").css("bottom", "15px");
            jQuery(".appear-fixed-on-scroll").css("top", "0px");
            jQuery(".admin-bar .appear-fixed-on-scroll").css("top", "32px");
        }
        if (jQuery(window).scrollTop() < 500) {
            jQuery(".scroll-to-top").css("bottom", "-60px");
            jQuery(".appear-fixed-on-scroll").css("top", "-90px");
        }
    });

      // For Scroll to top
    jQuery(".scroll-to-top").on("click", function() {
		return jQuery("html, body").animate({
			scrollTop: 0
		});
    });

});
