$(document).ready(function(){
	fixContentHeight();
	fixNavBar();
	$(window).resize(fixContentHeight);
	$(window).resize(fixNavBar);
	$('#moreDropdown').click(moreButtonHandler);
});

function moreButtonHandler() {
	$('ul.dropdownList').toggle();
}

function fixContentHeight() {
	var contentHeight = $(window).height() - $('nav').height() -1;
	$('#content').css('height',contentHeight);
}

function fixNavBar() {
	// Set the nav bar to a width to make sure it fits on the top
	var navWidth = $(window).width() - $('div#logos').width() - $('a#moreDropdown').outerWidth(true);	
	$('ul.mainNav').css('width',navWidth);
	
	// Put everything that doesn't fit in the nav bar in the more link
	$('ul.mainNav').children();
	
	var maxPositionOffset = $('ul.mainNav').children().first().position().top;
	
	var extraLinks = false;
	$('ul.mainNav').children().each(function() {
		var secondaryListItem = $(this).attr('class')+'-2';
		
		if ($(this).position().top > maxPositionOffset) {
			extraLinks = true;
			$('#'+secondaryListItem).show()
		}
		else {
			$('#'+secondaryListItem).hide();
		}
	});
	
	if(extraLinks) {
		$('a#moreDropdown').show();
	}
	else {
		$('a#moreDropdown').hide();
		$('ul.dropdownList').hide();
	}
}