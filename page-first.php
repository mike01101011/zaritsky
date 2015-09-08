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

	<div class="reveal">
		<div class="slides">
			<section>
				<div class="container">
					<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam accusamus, quis beatae blanditiis quasi laudantium provident rem facere cum dignissimos veritatis, fuga, explicabo tempore numquam ex ipsum at commodi! Ex!</h1>
				</div> <!-- /.container -->
			</section>
			<section>
				<div class="container">
					<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quaerat quos nobis. Quos culpa, magni, recusandae animi explicabo dolorem tempore! Praesentium nulla, magnam assumenda aliquam. A doloremque sunt voluptas magni.</h1>
				</div>
			</section>
		</div> <!-- /.slides -->
	</div> <!-- /.reveal -->
			
</main> <!-- /.main -->


<?php get_footer(); ?>