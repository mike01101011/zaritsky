<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	<div class="hero">
		<div class="container vertical-align">
			<h1>Mr Zaritsky<br><span class="on_tv">On <em>TV</em></span></h1>
		</div>
	</div>

	<?php $detail = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'detail',
				'order' => 'DSC'
			)
		);
	?>

	<?php if (have_posts()) : ?>
		<?php while ($detail->have_posts()) : $detail->the_post(); ?>
			<section class="project-details overlay" id="below">
				<div class="container">
					<div class="project-info">
						<?php the_field( 'details' ); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
	<?php endif; ?>


	<?php $doc_button = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'docbuttondetail',
				'order' => 'DSC'
			)
		);
	?>

	<?php if (have_posts()) : ?>
		<?php while ($doc_button->have_posts()) : $doc_button->the_post(); ?>
						<a href="http://www.cbc.ca/documentarychannel/" class="coming-soon-button"><?php the_field( 'documentary_channel_button' ); ?> <span class="large-documentary-logo"></span></a>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
	<?php endif; ?>
</main> <!-- /.main -->

<?php get_footer(); ?>