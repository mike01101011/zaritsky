<?php get_header();  ?>
<?php include("navigation.php"); ?>


<main>

	<?php include("banner.php"); ?>

	<div class="container">

		<div class="content">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			<?php endwhile; // end the loop?>
		</div> <!-- /,content -->

	</div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>