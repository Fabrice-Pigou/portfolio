'use stric';

function slider(){
	var iWidth = parseInt($('div.slideshow').css('width'));
	var iHeight = iWidth*0.25;

	$('div.slideshow img').css('height',iHeight);
	$('div.slideshow img').css('width',iWidth);
	$('div.slideshow').css('height',iHeight);
	$('div.slideshow ul').css('height',iHeight);
	
	setInterval(function()
	{
		$(".slideshow ul").animate(
			{marginLeft:'-'+iWidth}, 
			1000,	//	durée de l'animation
			function()
			{
				$(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
			}
		)
	}, 6000);	//	Temps d'attente entre 2 animation
};

function close(){
	$('div#message-flash').css('display', 'none');
};

