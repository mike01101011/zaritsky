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

	// Six Degrees Slide
	$('.slides').slick({
		infinite: false,
		mobileFirst: true,
		edgeFriction: 0,
		nextArrow: '.arrow-right-button',
		prevArrow: '.arrow-left-button',
		fade: true
	});
});