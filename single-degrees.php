<?php //index.php is the last resort template, if no other templates match 
/**
* Template Name: Degree
*/
?>
<?php get_header(); ?>

<!-- temp placeholder for slick -->
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>

<?php include("navigation.php"); ?>

	<main>
		<!-- To ensure that banner remains the same even though backend the page name will be different -->

		<?php include("banner.php"); ?>

		<?php
			$degree = new WP_Query(
				array(
					'posts_per_page' =>  1,
					'post_type' => 'degree',
					'order' => 'DSC',
				)
			);
		?>

		<div class="main-gallery">

			<?php if ( $degree->have_posts() ) : ?>
				<?php if( have_rows('individual') ): ?>
						<?php while( have_rows('individual') ): the_row();
							$image = get_sub_field('individuals_image');
							$name = get_sub_field('individuals_name');
							$story = get_sub_field('individuals_story');
						?>
							<div class="gallery-cell">
								<div class="container">
										<div class="slide-content">
												<div class="slide-img">
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
												</div>
												<div class="slide-info">
													<h2><?php echo $name; ?></h2>
													<p><?php echo $story; ?></p>
												</div>
										</div>
								</div>
							</div>
						<?php endwhile; ?>
				<?php endif; ?>
			<?php endif; ?>		
		</div>
	</main> <!-- /.main -->
<?php get_footer(); ?>