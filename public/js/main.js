$(window).bind('scroll',function(){
	var currentPos = $(window).scrollTop();
	var elems = $('.scroll');
	elems.each(function(index){
		var elemTop 	= $(this).offset().top;
        var elemBottom 	= elemTop + $(this).height();
      if(currentPos >= elemTop && currentPos <= elemBottom){
			var id = $(this).attr('id');
			var currentNav = $('a[href="#' + id+ '"]');
			currentNav.addClass('over').siblings().removeClass('over');
		}
	});
});