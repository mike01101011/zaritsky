<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	<div class="banner">
		<img src="https://placeholdit.imgix.net/~text?txtsize=63&txt=1000%C3%97250&w=1000&h=250" alt="test">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div> <!-- /.container -->
	</div>

	<section class="contact">
		<div class="container">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<p><?php the_content(); ?></p>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php
				$onePageQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'post_type' => 'social',
						'order' => 'DSC'
					)
				);
			?>
			
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