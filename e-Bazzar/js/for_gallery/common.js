$(function(){
	$('.js-menu')
	.css( {backgroundPosition: "0 0"} )
	.mouseover(function(){
		$(this).stop().animate({backgroundPosition:"(0 -79px)"}, {duration:500})
	})
	.mouseout(function(){
		$(this).stop().animate({backgroundPosition:"(0 0)"}, {duration:500})
	})
	$('.js-menu-active')
	.css( {backgroundPosition: "0 -79px"} )
	.mouseover(function(){
		$(this).stop().animate({backgroundPosition:"0 -79px"}, {duration:500})
	})
	.mouseout(function(){
		$(this).stop().animate({backgroundPosition:"0 -79px"}, {duration:500})
	})
	$('.backtotop').click(function(){
		$('html, body').animate({scrollTop:0}, 1000);
	});
	$("a[rel^='colorbox']").prettyPhoto({theme:'dark_rounded'});
});
   	$(document).ready(function() { 
        $(".message-send").click(function() { 
            $(".message-container").block({ message: null }); 
            //$(".message-container").unblock();
        }); 
    });
   
	/*jQuery.fn.autoscroll = function(selector) {
		alert(selector);
			$('body').animate(
				{scrollTop: $(selector).offset().top},
				500
			);
	}
	$('.backtotop').autoscroll('.backtotop');*/