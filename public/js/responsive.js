'use stric';

$(function(){
	$("#header_icon").click(function(e){
		e.preventDefault();
		$("#about").toggleClass("with-about");
	});

});

// $(function(){
// 	var H = $('#about').outerHeight();
// 	$('section.about').css("margin-top", "-"+H+"px");
// });

// $( window ).on("resize", function() {
// 	var H = $('#about').css("height");
// 	$('section.about').css("margin-top", "-"+H);
// });