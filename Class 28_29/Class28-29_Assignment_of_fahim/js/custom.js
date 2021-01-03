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

		jQuery(".b1 #menu").menu();

		jQuery("#ad").click(function(){
	jQuery("#dialog").dialog({"show":{effect: "blind",
        duration: 1000},
        "hide":{effect: "explode",
        duration: 1000}});
	return false
	});

		var name= ["dhaka","cox","faruk","Fahima","Khan","cat","inputs","Bank","Jayceon","Walker","Cohen","Arlo","Hector","Dante","Kyler","Garrett","Donovan","Seth","Jeffrey","Tyson","Jase","Desmond","Caiden","Gage","Atlas","Major","Devin","Edwin","Angelo","Orion","Conner","Julius","Marco","Jensen","Daxton","Peyton","Zayn","Collin","Jaylen","Dakota","Prince","Johnny","Kayson","Cruz","Hendrix","Atticus","Troy","Edgar","kamal","jabis","zind"];
       jQuery("#student").autocomplete({'source': name}); 


       jQuery("#date").datepicker({
       	      'changeMonth': true,
      		  'changeYear': true,
       });

       jQuery(".gen, .gen1").checkboxradio();

       jQuery("#date").tooltip({ 
       	'show': {effect:"slideDown", duration: 1000, delay: 500}	
       });

       jQuery("#accordion").accordion({
       	'collapsible': true
       });

       jQuery(".tabs").tabs();

       
    function fahim() {
      var red = $( ".red" ).slider( "value" ),
        green = $( ".green" ).slider( "value" ),
        blue = $( ".blue" ).slider( "value" );


        var bg = 'rgb('+red+','+green+','+blue+')';
        jQuery(".cpt").text(bg);


        jQuery(".cpb").css({backgroundColor: bg})
    }


       jQuery(".slider").slider({
       	'max': 255,
       	'value' : 60,
       	'change' : fahim,
		'slide': fahim
       });

       	var x = jQuery(".pb"),
       		y = jQuery(".pbl");
	jQuery(".pb").progressbar({
		'value' : false,
		'change' : function() {y.text(x.progressbar("value") + "%")},
		'complete' : function(){y.text("vaiya kaj kortece!!!!")}
	});

function hero(){
		var val= x.progressbar("value") ||0;
		x.progressbar("value" , val+1);
		if (val<99) {
			setTimeout (hero, 80);
		}
	};
	setTimeout (hero, 500);

	







	});