'use stric'

$(function (){
	var iWidth = parseInt($('div.slideshow').css('width'))
    var iHeight = parseInt(iWidth*0.333)

	$('div.slideshow img').css('height',iHeight)
	$('div.slideshow img').css('width',iWidth)
	$('div.slideshow').css('height',iHeight)
	$('div.slideshow ul').css('height',iHeight)
	
	setInterval(function()
	{
		$(".slideshow ul").animate(
			{marginLeft:'-'+iWidth}, 
			1500,	//	durée de l'animation
			function()
			{
				$(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"))
			}
		)
	}, 5000)	//	Temps d'attente entre 2 animation
})