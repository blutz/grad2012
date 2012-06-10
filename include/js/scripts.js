$(document).ready(function(){
	fixContentHeight();
	$(window).resize(fixContentHeight);
});

function fixContentHeight() {
	var contentHeight = $(window).height() - $('nav').height() -1;
	$('#content').css('height',contentHeight);
}