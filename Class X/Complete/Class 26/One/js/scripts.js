jQuery(document).ready(function(){
	jQuery(".btn-danger").dblclick(
			function(){
				jQuery(".box").slideToggle(2000);
			});


	jQuery(".btn-info").click(function(){
		jQuery(".ps").slideDown(2000);
	});

	
});