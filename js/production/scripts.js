$(function(){
	//your jQuery here
	
	//When click menu button, show menu
	$('.menu-button').click(function() {
		$('nav').addClass('open');
		$('body').css('overflow','hidden');
	});

	//When click on exit button, close menu button
	$('.exit-button').click(function() {
		$('nav').removeClass('open');
		$('body').css('overflow','visible');
	});
});


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