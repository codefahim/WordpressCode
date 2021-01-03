jQuery(document).ready(function(){
	jQuery(".x").owlCarousel({
		'margin': 10,
		'item' : 2,
		'responsive' : {
			600: { items : 3},
			1000 : {items : 5}
		},
		'stagePadding' : 10,
		'rewind' : true,
		'autoplay' : true,
		'autoplayHoverPause': true,
		'loop' : true,
		'freeDrag' : false,
		'startPosition' : 200,
		'marge' : true,
		'nav': true
	});

		


	jQuery(window).resize(function(){
	var xh = jQuery(".x").height();
		var dh = jQuery(".owl-dots").height();
		var xd = xh-dh;
		var oh = (xd)/2;
		var sh = jQuery("button.owl-dot").height();
		var shh = (sh)/2;
		var mr = oh-shh;
	jQuery('.owl-prev, .owl-next').css({'top' : mr});
	});
});