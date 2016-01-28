// @codekit-prepend "../_js/skip-link-focus-fix.js";
// @codekit-prepend "../_js/toolkit.js";

$(function(){

	/**
	 * Toggle site navigation for small device.
	 */
	function siteNavToggle() {
		var maxWidth = 640;
		if( window.matchMedia('(max-width:'+ maxWidth +'px)').matches ){
			$('#menu').addClass('drop drop--down').conceal();
			$('.site-navigation__button').drop();
		} else {
			$('#menu').removeClass('drop drop--down').reveal();
		}
	}
	siteNavToggle();
	// reset when window resize
	$(window).on('horizontalresize', function() { siteNavToggle(); });

});
