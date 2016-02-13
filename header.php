<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Documentary,John Zaritsky,Zaritsky,Canada,Canadian,Filmmaker,Filmmaking,Academy Award,Academy Award winner,independent,indie,independent film,doc,Doc Channel,Documentary Channel,Canadian Media Fund,big twin productions,big twin">
	<meta name="description" content="The official website for the documentary, 'Mr Zaritsky On TV'.">
	<title><?php  wp_title('|', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400|Oswald:300,400' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" />

	<!-- social media - start -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@bigtwinprod" />
	<meta name="twitter:creator" content="@bigtwinprod" />
	<meta name="twitter:title" content="Mr Zaritsky On TV" />
	<meta name="twitter:description" content="The official website for the documentary, 'Mr Zaritsky On TV'." />
	<meta name="twitter:image" content="<?php echo home_url(); ?>/social/zaritsky_crew.jpg" />

	<meta property="og:title" content="Mr Zaritsky On TV" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://mrzaritskyonfilm.com/" />
	<meta property="og:description" content="The official website for the documentary, 'Mr Zaritsky On TV'." />
	<meta property="og:image" content="<?php echo home_url(); ?>/social/zaritsky_crew.jpg" />
	<!-- social media - end -->

	<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="wrapper">
			<div class="container clearfix">

				<div class="site-title">
					<a href="<?php echo home_url(); ?>">Mr Zaritsky on TV</a>
				</div> <!-- /.site-title -->

				<div class="menu-buttons">
					<div class="menu-button">
						<a href="https://www.facebook.com/Mr-Zaritsky-On-TV-765569796899525/?fref=ts" target="_blank">
							<span class="facebook-menu-logo"></span>
						</a>
					</div>
					<div class="menu-button">
						<a href="https://twitter.com/bigtwinprod" target="_blank">
							<span class="twitter-menu-logo"></span>
						</a>
					</div>
					<div class="menu-button">
						<span class="menu-icon-button" id="menu-icon-button"></span>
					</div>
				</div> <!-- menu button -->
			</div> <!-- /.container -->
		</div> <!-- /.wrapper -->
	</header><!--/.header-->
