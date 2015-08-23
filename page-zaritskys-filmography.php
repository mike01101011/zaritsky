<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	<?php include("banner.php"); ?>

	<?php $onePageQuery = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'film',
				'order' => 'DSC'
			)
		);
	?>
	<section class="filmography-quote">
		<div class="container">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>

	<?php if ( $onePageQuery->have_posts() ) : ?>
		<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
			<section class="filmography">
				<div class="container">
					<div class="title">
						<h2><?php the_field( 'film_title' ); ?></h2>
					</div>
					<div class="film">
						<div class="video">
							<?php the_field( 'video' ); ?>
						</div>
						<div class="film-info">
							<p><?php the_field( 'film_info' ); ?></p>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
	<?php endif; ?>
</main> <!-- /.main -->

<?php get_footer(); ?>