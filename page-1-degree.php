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
						<svg class="six-degree-arrow" viewBox="0 0 350 350">
							<g class='prev'>
								<path fill="transparent" d="M294.664,29.47H55.346c-14.266,0-25.872,11.605-25.872,25.87v239.318c0,14.266,11.606,25.878,25.872,25.878
									h239.318c14.268,0,25.868-11.612,25.868-25.878V55.34C320.532,41.075,308.93,29.47,294.664,29.47z M217.502,272.973l-84.134-97.968
									l84.134-97.977V272.973z"/>
								<path d="M294.664,3.597H55.346C26.814,3.597,3.602,26.81,3.602,55.34v239.318c0,28.534,23.212,51.744,51.744,51.744
									h239.318c28.529,0,51.734-23.211,51.734-51.744V55.34C346.398,26.809,323.193,3.597,294.664,3.597z M320.532,294.658
									c0,14.266-11.601,25.878-25.868,25.878H55.346c-14.266,0-25.872-11.612-25.872-25.878V55.34c0-14.265,11.606-25.87,25.872-25.87
									h239.318c14.266,0,25.868,11.605,25.868,25.87V294.658z"/>
								<polygon points="217.502,272.973 217.502,77.028 133.368,175.005 	"/>
							</g>
						</svg>

						<div class="slide-info">
							<h2>TEST</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nesciunt voluptatem dolorem totam. Laboriosam harum aliquid aspernatur dicta rerum cum, provident animi aliquam facere, ab at odio in omnis ut!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio eaque, neque quidem quae quia cumque sapiente. Hic repellat amet deserunt culpa sapiente totam, nemo laudantium, fugiat dolores tempora beatae esse.</p>
						</div> <!-- /.written-info -->
						<svg class="six-degree-arrow" viewBox="0 0 350 350">
							<g class='next'>
								<path fill="transparent" d="M294.664,29.47H55.346c-14.266,0-25.872,11.605-25.872,25.87v239.318c0,14.266,11.606,25.878,25.872,25.878
									h239.318c14.268,0,25.868-11.612,25.868-25.878V55.34C320.532,41.075,308.93,29.47,294.664,29.47z M133.368,272.973V77.028
									l84.134,97.968L133.368,272.973z"/>
								<path d="M294.664,3.597H55.346C26.814,3.597,3.602,26.81,3.602,55.34v239.318c0,28.534,23.212,51.744,51.744,51.744
									h239.318c28.529,0,51.734-23.211,51.734-51.744V55.34C346.398,26.809,323.193,3.597,294.664,3.597z M320.532,294.658
									c0,14.266-11.601,25.878-25.868,25.878H55.346c-14.266,0-25.872-11.612-25.872-25.878V55.34c0-14.265,11.606-25.87,25.872-25.87
									h239.318c14.266,0,25.868,11.605,25.868,25.87V294.658z"/>
								<polygon points="133.368,272.973 217.502,174.996 133.368,77.028 	"/>
							</g>
						</svg>
					</div> <!-- /.container -->
				</div> <!-- /.slide -->
			</div> <!-- /.slides -->
		</div>
	</main> <!-- /.main -->
<?php get_footer(); ?>