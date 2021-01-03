jQuery(document).ready(function(){
	jQuery("p").click(function(){
		jQuery(this).hide();
	});



jQuery(window).resize(function(){
		var x=jQuery(window).width();

	jQuery(".box").text(x);
});
	var x=jQuery(window).width();
	jQuery(".box").text(x);


	jQuery(window).scroll(function(){
		var z=jQuery(window).scrollTop()
		jQuery(".box2").text(z);
	});
	
	var z=jQuery(window).scrollTop()
		jQuery(".box2").text(z);


		jQuery(".ico").click(function(){
			jQuery(".menu ul").slideToggle(1000); 
		})

		
		jQuery(window).resize(function(){
			var bar=jQuery(window).width();
			if(bar>768) {
				jQuery("ul").removeAttr("style");
			};
			
		});
});