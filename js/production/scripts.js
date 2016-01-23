var zaritskyApp = {};

//When click menu button, show menu
zaritskyApp.showMenu = function() {
	$('#menu-icon-button').click(function() {
		$('nav').addClass('open');
		$('body').css('overflow','hidden');
	});
};


//When click on exit button, close menu button
zaritskyApp.closeMenu = function() {
	$('.exit-button').click(function() {
		$('nav').removeClass('open');
		$('body').css('overflow','visible');
	});
};


// FitVid Plugin
zaritskyApp.fitVid = function() {
	$('.container').fitVids();
};


// Flickity used in 6 Degrees
zaritskyApp.flickity = function() {
	$(".main-gallery").flickity({
	  // options
		cellAlign: "left",
		contain: true,
		setGallerySize: true,
		arrowShape: {
			x0: 20,
			x1: 70, y1: 50,
			x2: 70, y2: 0,
			x3: 20
		},
		pageDots: false,
		watchCSS: true,
		imagesLoaded: true
	});
};


// Indentation of quotes
zaritskyApp.exdent = function() {
	$('blockquote, q').exdent({
		by: '.425em'
	});
};


// News Image Hover
zaritskyApp.newsImage = function() {
	$('.news-image').mouseenter(function() {
		$('.read-more-button').addClass('read-more-button-hover');
	});
	$('.news-image').mouseout(function() {
		$('.read-more-button').removeClass('read-more-button-hover');
	});
}


// Read More Button Hover
zaritskyApp.readMoreButton = function() {
	$('.read-more-button').mouseenter(function() {
		$('.news-photo').addClass('news-image-hover');
	});
	$('.read-more-button').mouseout(function() {
		$('.news-photo').removeClass('news-image-hover');
	});
}


// Load on Page Load
zaritskyApp.init = function() {
	zaritskyApp.showMenu();
	zaritskyApp.closeMenu();
	zaritskyApp.fitVid();
	zaritskyApp.flickity();
	zaritskyApp.exdent();
	zaritskyApp.newsImage();
	zaritskyApp.readMoreButton();
};


$(function(){
	zaritskyApp.init();
});