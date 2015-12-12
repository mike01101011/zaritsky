<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	
	<?php include("banner.php"); ?>

	<?php $about = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'trailer',
				'order' => 'DSC'
			)
		);
	?>

	<?php if (have_posts()) : ?>
		<?php while ($about->have_posts()) : $about->the_post(); ?>
			<section class="trailer">
				<div class="container">
					<div class="trailer-video">
						<?php the_field( 'trailer' ); ?>	
					</div>
				</div>
			</section>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
	<?php endif; ?>



	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<section class="about">
				<div class="container">
					<h2>The Film</h2>
					<?php the_content(); ?>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>
			
</main> <!-- /.main -->

<?php get_footer(); ?>