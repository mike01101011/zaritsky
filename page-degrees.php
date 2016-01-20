<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>

	<?php include("banner.php"); ?>

	<div class="container">
		<section class="degree-intro">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</section>
		
		<div class="degree-options">
			<?php
				$degree = new WP_Query(
					array(
						'posts_per_page' =>  -1,
						'post_type' => 'degrees',
						'order' => 'DSC',
					)
				);
			?>

			<?php if ( $degree->have_posts() ) : ?>
				<?php while ($degree->have_posts()) : $degree->the_post(); ?>
					<?php if( have_rows('individual') ): the_row();
						$image = get_sub_field('individuals_image');
					?>
						<a href="<? the_permalink(); ?>" class="option-link">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="degree-option">
							<div class="slide-info">
								<h2><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ); ?></h2>
							</div>
						</a>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
			
</main> <!-- /.main -->

<?php get_footer(); ?>