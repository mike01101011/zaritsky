<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	<?php include("banner.php"); ?>

	<?php
		$onePageQuery = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'social',
				'order' => 'DSC'
			)
		);
	?>
	<section class="contact">
		<div class="container">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="social-media-outlets">
				<?php if ( $onePageQuery->have_posts() ) : ?>
					<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
						<div class="social-media">
							<a href="<?php the_field( 'social_media_link' ); ?>" target="_blank" class="social-media-icon"><?php the_field( 'social_media' ); ?></a>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else: ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main> <!-- /.main -->

<?php get_footer(); ?>