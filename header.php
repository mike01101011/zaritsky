<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400|Oswald:300,400' rel='stylesheet' type='text/css'>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.min.css">
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
          <a href="//localhost:3000/zaritsky_site/">Mr Zaritsky on TV</a>
        </div> <!-- /.site-title -->

        <div class="menu-button">
          <a href="https://www.facebook.com/Mr-Zaritsky-On-TV-765569796899525/?fref=ts" target="_blank">
            <svg class="facebook" viewBox="0 0 350 350"><path d="M327.61 3.453H22.39c-10.46 0-18.936 8.476-18.936 18.936v305.22c0 10.458 8.475 18.937 18.936 18.937h164.32V213.683H142v-51.78h44.71V123.72c0-44.314 27.064-68.445 66.598-68.445 18.935 0 35.21 1.41 39.954 2.04v46.312l-27.42.012c-21.497 0-25.66 10.216-25.66 25.208v33.06h51.274l-6.677 51.778h-44.6v132.864h87.43c10.456 0 18.936-8.48 18.936-18.937V22.39c0-10.46-8.48-18.937-18.935-18.937z"/></svg>
          </a>

          <a href="https://twitter.com/bigtwinprod" target="_blank">
            <svg class="twitter" viewBox="0 0 350 350"><path d="M345.74 69.095c-12.563 5.57-26.064 9.338-40.238 11.03 14.467-8.67 25.574-22.4 30.805-38.76-13.535 8.03-28.528 13.86-44.488 17.002-12.78-13.616-30.988-22.124-51.138-22.124-38.693 0-70.062 31.368-70.062 70.058 0 5.492.62 10.84 1.815 15.967-58.227-2.922-109.85-30.813-144.403-73.2-6.03 10.348-9.485 22.382-9.485 35.222 0 24.305 12.37 45.748 31.167 58.312-11.484-.363-22.287-3.516-31.733-8.763-.004.29-.005.584-.005.88 0 33.944 24.15 62.26 56.2 68.696-5.88 1.6-12.07 2.457-18.458 2.457-4.515 0-8.903-.44-13.182-1.257 8.916 27.832 34.79 48.088 65.445 48.654-23.977 18.79-54.185 29.99-87.008 29.99-5.654 0-11.23-.33-16.712-.978 31.004 19.877 67.83 31.475 107.394 31.475 128.865 0 199.333-106.752 199.333-199.333 0-3.037-.068-6.06-.203-9.062 13.686-9.88 25.564-22.218 34.956-36.267z"/></svg>
          </a>
            
          <svg id='menu-icon-button' class="menu" viewBox="0 0 350 350"><g><path d="M73.94 83.718h202.134v25.872H73.94zM73.94 162.062h202.134v25.883H73.94zM73.94 240.415h202.134v25.866H73.94z"/><path d="M294.664 346.403H55.346c-28.532 0-51.744-23.212-51.744-51.745V55.34c0-28.53 23.212-51.743 51.744-51.743h239.318c28.53 0 51.734 23.212 51.734 51.743v239.318c0 28.533-23.204 51.745-51.734 51.745zM55.346 29.47c-14.266 0-25.872 11.605-25.872 25.87v239.318c0 14.266 11.606 25.878 25.872 25.878h239.318c14.267 0 25.868-11.612 25.868-25.878V55.34c0-14.265-11.602-25.87-25.868-25.87H55.346z"/></g></svg>
        </div> <!-- menu button -->
      </div> <!-- /.container -->
    </div> <!-- /.wrapper -->
  </header><!--/.header--> 