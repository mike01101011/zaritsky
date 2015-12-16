<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	<div class="hero">
		<div class="container vertical-align">
			<h1>Who in the World<br>is John Zaritsky?</h1>
		</div> <!-- /.container -->
		<div class="container">
			<a href="#below"><span class="arrow-down-button"></span></a>
		</div>
	</div>

	<section class="project-details overlay" id="below">
		<div class="container">
			<p>John Zaritsky is an acclaimed Academy Award winning documentary filmmaker, the film subject of <span class="film-title">Mr Zaritsky on TV</span>.</p>
			<br>
			<p>Never heard of John Zaritsky?</p>
			<br>
			<p>He's bigger than you think! Explore the <a href="./degrees" class="paragraph-link">Six Degrees of Zaritsky</a>, and discover the steps of separation from the personalities you know and love.</p>
			<a href="http://www.cbc.ca/documentarychannel/" class="coming-soon-button">Feature-Length Film Coming Soon To <span class="large-documentary-logo"></span>
			</a>
		</div>
	</section> <!-- /.details -->
</main> <!-- /.main -->

<?php get_footer(); ?> 