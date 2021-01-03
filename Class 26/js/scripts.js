jQuery(document).ready(function(){
	jQuery(".text").html("<h1>This Text Replaced bY html Method And applyed css for background</h1>").css("background","darkslateblue");

	jQuery(".text1").attr("id","test");
	
	jQuery(".b1").click(function(){
		jQuery(".text2").slideToggle(3000);
	});

	jQuery(".b2").click(function(){
		jQuery(".text3").slideDown(2000);
	});

	jQuery(".b3").click(function(){
		jQuery(".text4").animate({'width':'50%', 'height':'400px'},2000).animate({'width':'100px','height':'200px'},3000).animate({'width':'300px','height':'300px'},1000);
	});

	jQuery(".b4").click(function(){
		jQuery(".text5").animate({'width':'100px','height':'100px'},500).css("background","forestgreen").animate({'margin-left':'200px'},2000).animate({'marginTop':'200px'},2000).animate({'left':'-200px'},2000).animate({'top':'-200px'},2000,function(){alert("Thanks For Click")});
	});

	jQuery(".b5").click(function(){
		jQuery(".text5").stop();
	});

	jQuery(".bt1").click(function(){
		jQuery(".t1").append(" <i>Append Method Aplied.</i> ").css("background","#1abc9c");
	});

	jQuery(".bt2").click(function(){
		jQuery(".t2").prepend(" <i>Prepend Method Aplied.</i> ").css("background","#1abc9c");
	});

	jQuery(".bt3").click(function(){
		jQuery(".t3").after(" <i>Prepend Method After.</i> ").css("background","#1abc9c");
	});

	
	jQuery(".bd").click(function(){
		var ww= jQuery(window).width();
		var wx= jQuery(window).height();
		var wy= jQuery(".text6").innerWidth();
		var wz= jQuery(".text6").innerHeight();
		var wy= jQuery(".text6").innerWidth();

		alert("window Width-- "+ "  " + ww);
		alert("Window height-- "+ "  " + wx);
		alert("Inner Width-- "+ "  " + wy);
		alert("Inner Height-- "+ "  " + wz);

	});

	jQuery(".main").find(".box8").css("background","#1abc9c");
	jQuery(".box8").parentsUntil(".main").css("background","#1abc9c");
});