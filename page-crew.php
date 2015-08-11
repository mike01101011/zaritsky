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

	<?php
		$onePageQuery = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'crewmember',
				'order' => 'DSC'
			)
		);
	?>


	<?php if ( $onePageQuery->have_posts() ) : ?>
		<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post();
			$crewphoto = get_field('crew_photo');
		?>
			<section class="crew-members">
				<div class="container">
					<div class="crew-member">
						<div class="crew-photo">
							<img src="<?php echo $crewphoto['url']; ?>" alt="">
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