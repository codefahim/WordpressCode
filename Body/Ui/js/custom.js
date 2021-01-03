jQuery(document).ready(function(){
	jQuery(".menu ul li").click(function(){
		jQuery(this).children("ul").slideToggle();
	});

	jQuery(".ico").click(function(){
		jQuery(".menu ul").slideToggle();
	});

	jQuery(".menu ul ul").parent("li").children("a").append('<i class="fas fa-angle-down"></i>');

	jQuery(window).resize(function(){
	var mx=jQuery(window).width();
	if (mx>768) {
		jQuery("ul").removeAttr("style");
	}
	});

	jQuery(window).resize(function(){
		var wd=jQuery(window).width();
		jQuery(".box").text(wd);
	});
	var wd=jQuery(window).width();
		jQuery(".box").text(wd);

jQuery(window).scroll(function(){
	var st=jQuery(window).scrollTop();
		jQuery(".box1").text(st);
})
	var st=jQuery(window).scrollTop();
		jQuery(".box1").text(st);

		jQuery(window).scroll(function(){
			var tp= jQuery(window).scrollTop();
			if (tp> 40){
				jQuery(".menu").addClass("fixed");
			}
			else {
				jQuery(".menu").removeClass("fixed");
			}});

			jQuery(".box3").click(function() {
			jQuery("html").animate({scrollTop: 0},1000);
			return false;
		});



		jQuery(window).scroll(function(){
			var tx= jQuery(window).scrollTop();

			if (tx> 200) {
			jQuery(".head").addClass('fixed');
			}

			else {
			jQuery(".head").removeClass('fixed');
			}
		});






		jQuery(window).scroll(function(){
			var top= jQuery(window).scrollTop();
			if (top>200) {
				jQuery(".box3").slideDown(1000);
			}

			else {
				jQuery(".box3").slideUp(1000);
			}
		})









		

});