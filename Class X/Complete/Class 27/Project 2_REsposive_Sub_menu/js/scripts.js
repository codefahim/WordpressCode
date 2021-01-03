jQuery(document).ready(function(){

		jQuery(".ico").click(function(){
			jQuery(".menu ul").slideToggle(1000); 
		})

		
		jQuery(window).resize(function(){
			var bar=jQuery(window).width();
			if(bar>768) {
				jQuery("ul").removeAttr("style");
			};
			
		});
		
	jQuery(".box").click(function() {
			jQuery("html").animate({scrollTop: 0},1000);
			return false;
		});

		jQuery(".menu ul li").click(function() {
			jQuery(this).children('ul').slideToggle(2000,"easeInOutElastic");
		});

		jQuery(".menu ul ul").parent("li").children('a').append('<i class="fas fa-angle-down"></i>');

	
		jQuery(window).scroll(function() {
			
			var xc= jQuery(window).scrollTop();
			if (xc>200) {
				jQuery(".box").slideDown(1000);
			}

			else {
				jQuery(".box").slideUp(1000);
			}
		});

		jQuery(window).scroll(function(){
			var xx= jQuery(window).scrollTop();
			if(xx>20){
				jQuery(".header-area").addClass('fixed');
			}
			else{
				jQuery(".header-area").removeClass('fixed');
			}
		});
});