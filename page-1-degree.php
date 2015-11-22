<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<!-- temp placeholder for slick -->
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>

<?php include("navigation.php"); ?>

	<main>
		<!-- To ensure that banner remains the same even though backend the page name will be different -->
		<div class="banner">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/background/banner.png" alt="test">
			<div class="container">
				<h1>Six Degrees of Zaritsky</h1>
			</div> <!-- /.container -->
		</div>
		
		<div class="container">
			<div class="main-gallery">
				<div class="gallery-cell">
					<div class="slide-info">
						<h2>Dennis Tito</h2>
						<p>Tito is literally a rocket scientist, entrepreneur and billionaire. He bought his way into ISS EP-1 space mission – an 8 day trip to the International Space Station – making Tito the first <a class="paragraph-link" href="https://www.youtube.com/watch?v=MOxHc5-6V-g" target="_blank">space tourist</a>. The program was met with disapproval from NASA, deeming commercial spaceflight “inappropriate.” The voyage was, coincidently, run through the Russian Federal Space Agency.</p>
						<img class='degree-image' src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="">
					</div>
				</div>
				<div class="gallery-cell">
					<div class="slide-info">
						<h2>Art Garfunkel</h2>
						<p>Before making up half of the famous folk duo, Art Garfunkel performed with Paul Simon as a teenager under the name Tom & Jerry. In the song Only Living Boy In New York, Simon sings, Tom, get your plane right on time. / I know your part'll go fine referring to the role Garfunkel landed in the film Catch-22. Simon’s part in the film was scrapped, which lead to some bitterness. The two graduated in 1958 from Forest Hills High School along with classmate <span class="previous-degree">Dennis Tito</span>.</p>
						<img class='degree-image' src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="">
					</div>
				</div>
			</div>
		</div>

		
	</main> <!-- /.main -->
<?php get_footer(); ?>