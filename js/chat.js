jQuery(document).ready(function($){
	$(".fechar").hide();
	$('.but_chat').click(
		function () {
			$("#chat").animate({right:'0'});
			$("#chat").css({width:'315px'});
			$(".but_chat").hide();
			$(".fechar").show();
		}
	);	
	$('.fechar').click(
		function () {
			$("#chat").animate({right:'-270'});
			$(".but_chat").show();
			$(".fechar").hide();
			$("#chat").css({width:'360px'});
		}
	);

	
});
