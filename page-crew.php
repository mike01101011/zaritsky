<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	<?php include("banner.php"); ?>

	<?php
		$crew = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'crewmember',
				'order' => 'DSC'
			)
		);
	?>


	<?php if ( $crew->have_posts() ) : ?>
		<?php while ($crew->have_posts()) : $crew->the_post();
			$crewphoto = get_field('crew_photo');
		?>
			<section class="crew-members">
				<div class="container">
					<div class="crew-member">
						<div class="crew-photo">
							<img src="<?php echo $crewphoto['url']; ?>" alt="<?php echo $crewphoto['alt']; ?>">
						</div>
						<div class="crew-info">
							<h2><?php the_field( 'crew_name' ); ?></h2>
							<h3><?php the_field('crew_position'); ?></h3>
							<p><?php the_field( 'crew_bio' ); ?></p>
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