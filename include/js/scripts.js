$(document).ready(function(){
	fixContentHeight();
	fixNavBar();
	initScrollPanes();
	fixThirtyIllo();

	$(window).resize(fixContentHeight);
	$(window).resize(fixNavBar);
	$(window).resize(initScrollPanes);
	$(window).resize(fixRightScroll);
	$(window).resize(fixThirtyIllo);
	$('#moreDropdown').click(moreButtonHandler);
	$('div.scrollContentSmall').hover(mapSelectHoverOver, mapSelectHoverOut);
	$('div.scrollContentSmall').click(mapSelectClickHandler);
	$('div.mapMarker').click(mapIconClickHandler);
	
	$('div.scrollContent').click(scrollContentHandler);
	
			
});

$(window).load(function(){
	initScrollPanes();
});

function fixThirtyIllo() {
	var columnHeight = $('div#rightContentPane').height()-20;
	$('div#column_start').css('height',columnHeight);
}

function placeMapDots() {
	$('a#londonDot').css('left',$(window).width()/2-320);
	$('a#scotlandDot').css('left',$(window).width()/2-400);
	$('a#chinaDot').css('left',$(window).width()/2+200);
	$('a#japanDot').css('left',$(window).width()/2+330);

}

function mapSelectHoverOver() {
	// Don't conflict with the click handler
	if($(this).hasClass('selected'))
		return;
		
	var locationName = $(this).attr('name');
	$('div.mapMarker.'+locationName).addClass('mapMarkerSelect');
}

function mapSelectHoverOut() {
	// Don't conflict with the click handler
	if($(this).hasClass('selected'))
		return;
		
	var locationName = $(this).attr('name');
	$('div.mapMarker.'+locationName).removeClass('mapMarkerSelect');
}

function mapSelectClickHandler() {
	// This handler fires in addition to the standard handler
	// for lists. The content loading is taken care of by that one.
	$('div.mapMarker').each(function() {
		$(this).removeClass('mapMarkerSelect');
	});
	
	var locationName = $(this).attr('name');
	$('div.mapMarker.'+locationName).addClass('mapMarkerSelect');
	
	$('embed').each(function() {
		$(this).stopVideo();
	});
}

function mapIconClickHandler() {
	// Simulate a click for the button on the bottom
	$('div.scrollContent[name='+$(this).attr('name')+']').click();
}

function loadGallery() {	
	Galleria.loadTheme('include/gallery/galleria.classic.min.js');
    Galleria.run('#galleria');
}

function scrollContentHandler() {
	var contentName = $(this).attr('name');
	$('div#rightContentPane').children().children().children('div.rightContent').each(function() {
		if($(this).attr('id') == contentName)
			$(this).show();
		else
			$(this).hide();
	});
	$('div.scrollContent.selected').each(function() {
		$(this).removeClass('selected');
	});
	$(this).addClass('selected');
	
	initScrollPanes();
	
	$('div#rightContentPane').data('jsp').scrollToY(0);

}

function initScrollPanes() {
	fixRightScroll();
	var widthOfLeft = $('.leftScroll').width();
	var widthOfContent = $('.rightContentPane').width();
	$('.leftScroll').jScrollPane({clickOnTrack:false,contentWidth:widthOfLeft});
	$('#rightContentPane').jScrollPane({clickOnTrack:false,contentWidth:widthOfContent});
}

function fixRightScroll() {
	var widthOfRight = $(window).width() - $('.leftScroll').outerWidth()-20;
	$('#rightContentPane').css('width',widthOfRight);
}

function moreButtonHandler() {
	$('ul.dropdownList').toggle();
}

function fixContentHeight() {
	var contentHeight = $(window).height() - $('nav').height() -1;
	$('#content').css('height',contentHeight);
	
	// Fix the height of the map scroll pane
	var mapScrollHeight = $('div.leftScroll.mapScroll').parent().height() - $('#mapofmemories').height();
	$('div.leftScroll.mapScroll').css('height',mapScrollHeight);
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