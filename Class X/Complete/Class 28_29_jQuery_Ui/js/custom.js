jQuery(document).ready(function(){

jQuery(".box").draggable({"containment":".box1"});
jQuery(".box2").draggable({'containment': 'parent'});
jQuery(".box4").droppable({'drop':function(){
	jQuery(this).addClass("drops",1000);
},'accept':'.box8'});
jQuery(".box5").draggable();
jQuery(".box6").draggable();
jQuery(".box7").draggable();
jQuery(".box8").draggable();
jQuery(".box9").resizable({'animate': true});

jQuery(".list, .list1 ").sortable({'connectWith':'#fahim'});


jQuery(".box12").accordion({'collapsible':true, 'icons':'icons'});


var name= ["dhaka","cox","faruk","Fahima","Khan","cat","inputs","Bank","kamal","jabis","zind"];
jQuery("#in").autocomplete({"source": name});

jQuery("button").button();

jQuery("#radio1,#radio2,#radio3,#radio4").checkboxradio();

jQuery("#date").datepicker({showButtonPanel: true, changeMonth: true,
      changeYear: true});


jQuery(".ax").click(function(){
	jQuery(".box16").dialog({"show":{effect: "blind",
        duration: 1000},
        "hide":{effect: "explode",
        duration: 1000}});
	return false
});

jQuery("#ulx").menu();
jQuery(".box17").progressbar({'value': 50});


var x=jQuery(".box17"),
	y= jQuery(".label");

	x.progressbar({
		'value': false,
		'change': function (){y.text(x.progressbar("value")+ "%")},
		'complete': function(){y.text("vai kaj kortece.")}
	});

	function hero(){
		var val= x.progressbar("value") ||0;
		x.progressbar("value" , val+1);
		if (val<99) {
			setTimeout (hero, 80);
		}
	}
setTimeout (hero, 500);


	jQuery("#ids").selectmenu();

	jQuery(".box19").tabs({'collapsible': true});






    function fahim() {
      var red = $( ".red" ).slider( "value" ),
        green = $( ".green" ).slider( "value" ),
        blue = $( ".blue" ).slider( "value" );


        var bg = 'rgb('+red+','+green+','+blue+')';
        jQuery(".box20").text(bg);


        jQuery(".box20").css({backgroundColor: bg})
    
     
    }

	jQuery(".nc").slider({
			'value': 50,
			'max': 255,
			'change' : fahim,
			'slide': fahim
	});
jQuery(".box21").slider({
	'range' : true,
	'min' : 0,
	'max' : 5000,
	'values': [200,2000],
	'slide' :function(x,y){
		jQuery(".box22").text('Price Range:' +y.values[0]+ ''+ 'Taka '+ '-' +y.values[1]+ 'Taka ')
	}
});
jQuery(".box22").text("Price Range : 200 Taka - 2000 Taka");




























 });














