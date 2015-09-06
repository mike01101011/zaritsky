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

	<div class="container">
		<h1>Test</h1>
	</div> <!-- /.container -->

			
</main> <!-- /.main -->

<?php get_footer(); ?>