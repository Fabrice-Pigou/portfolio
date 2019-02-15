'use stric';

$(document).ready(function(){
	$('input#search').keyup(function(){
		var search = $(this).val();
		search = $.trim(search);

		// if(search!="" && search.length >= 3){
		if(search!=""){
			$('div.resultat').css('display', 'inline-block');

			$.get("/ajax/search-" + search, {search:search},function(data){
				$("div.resultat ul").html(data);
			});
		}else{
			$("div.resultat").css('display', 'none');
		}
	});

});