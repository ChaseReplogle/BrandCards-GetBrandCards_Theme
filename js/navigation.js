jQuery(document).ready(function( $ ) {

	$(".mobile_menu").hide();

	$(window).resize(function(){
		if ($(window).width() <= 800){
			$("#sticky").attr("id", "not_sticky");
		}
	});


	$(".mobile_toggle").click(function(){
    	$(".mobile_menu").toggle();
	});

	$(".mobile_menu li a").click(function(){
    	$(".mobile_menu").hide();
	});

});


jQuery(document).ready(function( $ ) {

});