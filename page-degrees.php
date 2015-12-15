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
	</div>

	<div class="degree-options">
		<?php
			$degree = new WP_Query(
				array(
					'posts_per_page' =>  -1,
					'post_type' => 'degree',
					'order' => 'DSC',
				)
			);
		?>

		<a href="" class="option-link"><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="" class="degree-option"></a>

		<a href="" class="option-link"><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="" class="degree-option"></a>

		<a href="" class="option-link"><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="" class="degree-option"></a>

		<a href="" class="option-link"><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="" class="degree-option"></a>

		<a href="" class="option-link"><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="" class="degree-option"></a>

		<a href="" class="option-link"><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="" class="degree-option"></a>

		<a href="" class="option-link"><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="" class="degree-option"></a>
		<!-- <div class="row">
			<a href="./dennis-tito/" class="degree-1 degree"></a>

			<a href="./2-degree" class="degree-2 degree"></a>
		</div>
		
		<div class="row">
			<a href="./3-degree" class="degree-3 degree"></a>

			<a href="./4-degree" class="degree-4 degree"></a>
		</div>
		
		<div class="row">
			<a href="./5-degree" class="degree-5 degree"></a>

			<a href="./6-degree" class="degree-6 degree"></a>
		</div> -->


	</div>

			
</main> <!-- /.main -->

<?php get_footer(); ?>