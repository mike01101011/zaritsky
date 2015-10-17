<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<!-- temp placeholder for slick -->
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>

<?php include("navigation.php"); ?>

	<main>
		<!-- To ensure that banner remains the same even though backend the page name will be different -->
		<div class="banner">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/background/banner.png" alt="test">
			<div class="container">
				<h1>Six Degrees of Zaritsky</h1>
			</div> <!-- /.container -->
		</div>

		<div class="slide-content">
			<div class= "slides">
				<div class="slide">
					<div class="container">
						<div class="written-info">
							<h2>TEST</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nesciunt voluptatem dolorem totam. Laboriosam harum aliquid aspernatur dicta rerum cum, provident animi aliquam facere, ab at odio in omnis ut!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio eaque, neque quidem quae quia cumque sapiente. Hic repellat amet deserunt culpa sapiente totam, nemo laudantium, fugiat dolores tempora beatae esse.</p>
						</div> <!-- /.written-info -->
						<svg class="next" viewBox="0 0 350 350">
							<path d="M294.664,346.402H55.346c-28.532,0-51.744-23.21-51.744-51.744V55.34c0-28.53,23.212-51.743,51.744-51.743 h239.318c28.529,0,51.734,23.212,51.734,51.743v239.318C346.398,323.191,323.193,346.402,294.664,346.402L294.664,346.402z M55.346,29.47c-14.266,0-25.872,11.605-25.872,25.87v239.318c0,14.266,11.606,25.878,25.872,25.878h239.318 c14.268,0,25.868-11.612,25.868-25.878V55.34c0-14.265-11.603-25.87-25.868-25.87H55.346z"/>
							<path d="M217.502,174.996l-84.134,97.977V77.028"/>
						</svg>
					</div> <!-- /.container -->
				</div> <!-- /.slide -->
				
				<div class="slide">
					<div class="container">
						<svg class="prev" viewBox="0 0 350 350">
							<path d="M294.664,346.402H55.346c-28.532,0-51.744-23.21-51.744-51.744V55.34c0-28.53,23.212-51.743,51.744-51.743 h239.318c28.529,0,51.734,23.212,51.734,51.743v239.318C346.398,323.191,323.193,346.402,294.664,346.402L294.664,346.402z M55.346,29.47c-14.266,0-25.872,11.605-25.872,25.87v239.318c0,14.266,11.606,25.878,25.872,25.878h239.318 c14.268,0,25.868-11.612,25.868-25.878V55.34c0-14.265-11.603-25.87-25.868-25.87H55.346z"/>
							<path d="M133.368,175.005l84.134-97.977v195.944"/>
						</svg>
						<div class="written-info">
							<h2>TEST</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nesciunt voluptatem dolorem totam. Laboriosam harum aliquid aspernatur dicta rerum cum, provident animi aliquam facere, ab at odio in omnis ut!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio eaque, neque quidem quae quia cumque sapiente. Hic repellat amet deserunt culpa sapiente totam, nemo laudantium, fugiat dolores tempora beatae esse.</p>
						</div> <!-- /.written-info -->
						<svg class="next" viewBox="0 0 350 350">
							<path d="M294.664,346.402H55.346c-28.532,0-51.744-23.21-51.744-51.744V55.34c0-28.53,23.212-51.743,51.744-51.743 h239.318c28.529,0,51.734,23.212,51.734,51.743v239.318C346.398,323.191,323.193,346.402,294.664,346.402L294.664,346.402z M55.346,29.47c-14.266,0-25.872,11.605-25.872,25.87v239.318c0,14.266,11.606,25.878,25.872,25.878h239.318 c14.268,0,25.868-11.612,25.868-25.878V55.34c0-14.265-11.603-25.87-25.868-25.87H55.346z"/>
							<path d="M217.502,174.996l-84.134,97.977V77.028"/>
						</svg>
					</div> <!-- /.container -->
				</div> <!-- /.slide -->
			</div> <!-- /.slides -->


			
		</div>
			
		
	</main> <!-- /.main -->

<?php get_footer(); ?>