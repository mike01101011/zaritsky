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
				'post_type' => 'news',
				'order' => 'DSC'
			)
		);
	?>


	<?php if ( $onePageQuery->have_posts() ) : ?>
		<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post();
			$newsimage = get_field('news_image');
		?>
			<section class="news">
				<div class="container">
					<div class="news-story">
						<div class="news-photo">
							<img src="<?php echo $newsimage['url']; ?>" alt="">
						</div>
						<div class="news-brief">
							<p><?php the_field( 'news_excerpt' ); ?></p>
							<a href="<?php the_field( 'news_link' ); ?>" class="read-more-button">Read More</a>
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