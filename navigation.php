<nav class="main-navigation">
	<!-- off-screen menu = start -->
	<div class="container clearfix">
		<div class="exit-button">
			<span class="exit-icon-button"></span>
		</div> <!-- /.exit-button -->
		<div class="menu-items">
			<?php wp_nav_menu( array(
				'container' => false,
				'theme_locations' => 'primary'
			)); ?>
		</div><!-- /.menu-items -->
	</div> <!-- .menu-container .clearfix -->
	<!-- off-screen menu = end -->
</nav> <!-- .main-navigation -->