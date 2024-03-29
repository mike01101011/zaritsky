<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	<?php include("banner.php"); ?>

	<?php
		$latest_news = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'news',
				'order' => 'DSC'
			)
		);
	?>


	<?php if ( $latest_news->have_posts() ) : ?>
		<?php while ($latest_news->have_posts()) : $latest_news->the_post();
			$newsimage = get_field('news_image');
		?>
			<section class="news">
				<div class="container">
					<div class="news-story">
						<div class="news-photo">
							<?php if (get_field('news_link')) { ?>
								<a href="<?php the_field( 'news_link' ); ?>" target=_blank><img src="<?php echo $newsimage['url']; ?>" alt="<?php echo $newsimage['alt']; ?>" class="news-image"></a>
							<?php } else { ?>
								<img src="<?php echo $newsimage['url']; ?>" alt="<?php echo $newsimage['alt']; ?>" class="news-image">
							<?php } ?>
						</div>
						<div class="news-brief">
							<?php the_field( 'news_excerpt' ); ?>
							<?php if (get_field('news_link')): ?>
								<a href="<?php the_field( 'news_link' ); ?>" class="read-more-button" target=_blank>Read More</a>
							<?php endif; ?>
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