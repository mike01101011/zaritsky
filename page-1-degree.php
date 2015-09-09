<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

	<main>
		<!-- To ensure that banner remains the same even though backend the page name will be different -->
		<div class="banner">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/background/banner.png" alt="test">
			<div class="container">
				<h1>Six Degrees of Zaritsky</h1>
			</div> <!-- /.container -->
		</div>

		<section>
			<div class="wrap">
				<div id="slides">
					<!-- load in slides -->
				</div>
			</div>
		</section>
	</main> <!-- /.main -->

<?php get_footer(); ?>

<script>
	var Slides = {
		container : $( "#slides" ),
		totalSlides : '',
		translateAmount: 1,
		currentSlide: 1,
		slideWidth: '',

		init: function(totalSlides) {
			var each;

			// If nothing was passed to this function, we can't continue. 
			if ( !totalSlides ) throw new Error('Please pass the total number of slides.');
			Slides.totalSlides = totalSlides;

			// Load the slides
			Slides.loadContent();

			each = Slides.container.children('div');

			// Determine the width of our canvas
			Slides.slideWidth = each.width() + ( parseInt( each.css('margin-right'), 10 ) );

			Slides.keyPress();

		},

		loadContent : function() {
			//Hide the container.
			Slides.container.hide();
			for ( var i = 0; i < Slides.totalSlides; i++ ) {
				$('<div id="#slide-' + i + '"></div>')
					.load('<?php bloginfo('template_url'); ?>/slides/1/' + i + '.html')
					.appendTo(Slides.container);
				}
		   // Now display the slides container again - causing exactly one reflow.
			Slides.container.show();
		},

		keyPress : function() {
			$(document.body).keydown(function(e) {
			// if left or right arrow key is pressed
				if ( e.keyCode === 39 || e.keyCode === 37 ) {
					e.preventDefault();
		            ( e.keyCode === 39 ) ? Slides.next() : Slides.prev();
				}
			});
		},

		prev : function() {
			// No more left to go back.
			if ( Slides.translateAmount === 1 ) return;

			Slides.translateAmount += Slides.slideWidth;
			Slides.updateHash( --Slides.currentSlide );
			Slides.animate();
		},

		next: function() {
			if ( Slides.translateAmount === Slides.totalSlides ) return;
			Slides.translateAmount -= Slides.slideWidth;
			Slides.updateHash( ++Slides.currentSlide );
			// No more left to go back.
			Slides.animate();
		},

		animate : function() {
			Slides
				.container
				.children()
					.css( '-webkit-transform', 'translateX(' + Slides.translateAmount + 'px)' );
		},

		updateHash : function(direction) {
			//Update current Slides and hash.
			location.hash = "#slide-" + Slides.currentSlide;
		}
	};

	// All right; let's do this.
	Slides.init(6);
</script>