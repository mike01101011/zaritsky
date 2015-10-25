<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Oswald' rel='stylesheet' type='text/css'>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.1/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" />

  <!-- social media - start -->
<!--   <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@christiepitsff" />
  <meta name="twitter:creator" content="@christiepitsff" />
  <meta name="twitter:title" content="Christie Pits Film Festival" />
  <meta name="twitter:description" content="Official website for the Toronto-based Film Festival." />
  <meta name="twitter:image" content="http://christiepitsff.com/social/cpff-logo.png" />

  <meta property="og:title" content="Christie Pits Film Festival" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://christiepitsff.com/" />
  <meta property="og:description" content="Official website for the Toronto-based Film Festival." />
  <meta property="og:image" content="http://christiepitsff.com/social/cpff-logo.png" /> -->
  <!-- social media - end -->

  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="wrapper">
      <div class="container clearfix">

        <div class="site-title">
          <a href="//localhost:3000/zaritsky_site/">Zaritsky Project</a>
        </div> <!-- /.site-title -->

        <div class="menu-button">
          <a href="http://facebook.com" target="_blank"><span class="facebook-menu-logo"></span></a>
          <a href="http://twitter.com" target="_blank"><span class="twitter-menu-logo"></span></a>
          <span id='menu-icon-button' class="menu-icon-button"></span>
        </div> <!-- menu button -->
      </div> <!-- /.container -->
    </div> <!-- /.wrapper -->
  </header><!--/.header--> 