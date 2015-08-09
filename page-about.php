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

	<?php $onePageQuery = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'trailer',
				'order' => 'DSC'
			)
		);
	?>

	<?php if (have_posts()) : ?>
		<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
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