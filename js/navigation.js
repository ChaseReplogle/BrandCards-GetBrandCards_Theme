jQuery(document).ready(function( $ ) {

	$(".mobile_menu").hide();

	$(window).resize(function(){
		if ($(window).width() <= 850){
			$("#sticky").attr("id", "not_sticky");
		}
	});


	$(".mobile_toggle").click(function(){
    	$(".mobile_menu").toggle();
	});

});