$(function(){
	// Smooth Scroll
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top - 45
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

	//When click menu button, show menu
	$('#menu-icon-button').click(function() {
		$('nav').addClass('open');
		$('body').css('overflow','hidden');
	});

	//When click on exit button, close menu button
	$('.exit-button').click(function() {
		$('nav').removeClass('open');
		$('body').css('overflow','visible');
	});

	// Used to ensure all videos are responsive
	$('.container').fitVids();


	$(".main-gallery").flickity({
	  // options
		cellAlign: "left",
		contain: true,
		setGallerySize: true,
		arrowShape: {
			x0: 10,
			x1: 60, y1: 50,
			x2: 60, y2: 0,
			x3: 10
		},
		pageDots: false,
		watchCSS: true,
		imagesLoaded: true
	});
});