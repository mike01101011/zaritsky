<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	<section class="header">
		<img src="https://placeholdit.imgix.net/~text?txtsize=63&txt=1000%C3%97250&w=1000&h=250" alt="test">
		<div class="container">
			<h1><?php echo get_the_title(); ?></h1>
		</div> <!-- /.container -->
	</section>

	<section class="contact">
		<div class="container">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam modi perferendis soluta, beatae et iure distinctio accusamus laboriosam unde, excepturi ducimus voluptatem optio, nobis ad sapiente. Natus ea quisquam ab.</p>

			<div class="social-media">
				
			</div>
		</div>
	</section>
</main> <!-- /.main -->

<?php get_footer(); ?>