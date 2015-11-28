<div class="banner">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/background/banner.png" alt="test">

	<div class="container">
		<h1><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ); ?></h1>
	</div> <!-- /.container -->
</div>