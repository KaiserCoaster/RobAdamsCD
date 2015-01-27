(function( $ ) {
	$(".pillar a").click(function(e) {
		e.preventDefault();
		var obj = $($(this).attr('href'));
		obj.slideToggle();
	});
})( jQuery );