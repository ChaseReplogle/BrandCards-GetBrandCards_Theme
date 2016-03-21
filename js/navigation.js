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
$(function() {

    var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com'], object, embed"),
    $fluidEl = $("figure");

	$allVideos.each(function() {

	  $(this)
	    // jQuery .data does not work on object/embed elements
	    .attr('data-aspectRatio', this.height / this.width)
	    .removeAttr('height')
	    .removeAttr('width');

	});

	$(window).resize(function() {

	  var newWidth = $fluidEl.width();
	  $allVideos.each(function() {

	    var $el = $(this);
	    $el
	        .width(newWidth)
	        .height(newWidth * $el.attr('data-aspectRatio'));

	  });

	}).resize();

});
});