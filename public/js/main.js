$(document).ready(function() {
	if(screen.width > 720) {
$(window).bind('scroll',function(){
	var currentPos = $(window).scrollTop();
	var elems = $('.scroll');
	elems.each(function(index){
		var elemTop 	= $(this).offset().top;
        var elemBottom 	= elemTop + $(this).height();
      if(currentPos >= (elemTop-($(this).height()/2)) && currentPos <= (elemBottom)){
			var id = $(this).attr('id');
			var currentNav = $('a[href="#' + id+ '"]');
			currentNav.addClass('over').siblings().removeClass('over');
			var currentHr = currentNav.next('hr');
			currentHr.removeClass('normal').addClass('crossed').siblings('.crossed').removeClass('crossed').addClass('normal');
		}
	});
});
}




$('.span').click(function(){
	if($('#spanHovered').hasClass('hidden')) {
	$('#spanHovered').addClass('show ').removeClass('hidden');
    } else {
	 	$('#spanHovered').addClass('hidden').removeClass('show');
    }
});

$('.shortNavLink').click((e)=>{
    $('#spanHovered').addClass('hidden').removeClass('show text-center');
});



setTimeout(function(){
  if ($('#mailMessage').length > 0) {
    $('#mailMessage').remove();
  }
}, 5000)
});



