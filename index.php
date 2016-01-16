<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	<div class="hero">
		<div class="container vertical-align">
			<h1>Mr Zaritsky<br><span class="on_tv">On <em>TV</em></span></h1>
		</div>
	</div>

	<section class="project-details overlay" id="below">
		<div class="container">
			<div class="project-info">
				<p>John Zaritsky is an acclaimed Academy Award winning documentary filmmaker, the film subject of <a href="./about" class="paragraph-link"><em>Mr&nbsp;Zaritsky&nbsp;On&nbsp;TV</em></a>.</p>
				<br>
				<p>Explore the <a href="./degrees" class="paragraph-link">Six Degrees of Zaritsky</a>, and discover John's connection to the cultural moguls and personalities you know and love.</p>
				<br>
				<p> Or, check out John's <a href="./zaritskys-filmography" class="paragraph-link">Filmography</a>, and hear the stories behind the films that distinguish John as one of Canada's best journalistic documentary filmmakers!</p>
			</div>
			<a href="http://www.cbc.ca/documentarychannel/" class="coming-soon-button">Feature-Length Film Coming Soon To <span class="large-documentary-logo"></span>
			</a>
		</div>
	</section>
</main> <!-- /.main -->

<?php get_footer(); ?> 