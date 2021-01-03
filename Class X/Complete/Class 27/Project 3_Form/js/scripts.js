jQuery(document).ready(function(){

jQuery("form").submit(function(){
	var x= jQuery("input[type='text']").val();
	jQuery(this).after("<p>"+x+"</p>")
})


jQuery(".formx").submit(function(){
	var xx= jQuery(".f1").val();
	var xy= jQuery(".f2").val();
	var z= parseInt(xx) + parseInt(xy)
	jQuery(this).after("<p>"+z+"</p>")
});


jQuery(".formy input[type='text']").focus(function(){
	jQuery(this).val("This Empty");
});

jQuery(".formy input[type='text']").blur(function(){
	jQuery(this).val("This Empty not");
});

});


 