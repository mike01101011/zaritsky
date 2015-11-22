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
		
		
		<div class="main-gallery">
			<div class="gallery-cell">
				<div class="container">
					<div class="slide-info">
						<h2>Dennis Tito</h2>
						<p>Tito is literally a rocket scientist, entrepreneur and billionaire. He bought his way into ISS EP-1 space mission – an 8 day trip to the International Space Station – making Tito the first <a class="paragraph-link" href="https://www.youtube.com/watch?v=MOxHc5-6V-g" target="_blank">space tourist</a>. The program was met with disapproval from NASA, deeming commercial spaceflight “inappropriate.” The voyage was, coincidently, run through the Russian Federal Space Agency.</p>
						<img class='degree-image' src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="">
					</div>
				</div>
			</div>
			<div class="gallery-cell">
				<div class="container">
					<div class="slide-info">
						<h2>Art Garfunkel</h2>
						<p>Before making up half of the famous folk duo, Art Garfunkel performed with Paul Simon as a teenager under the name Tom & Jerry. In the song Only Living Boy In New York, Simon sings, Tom, get your plane right on time. / I know your part'll go fine referring to the role Garfunkel landed in the film Catch-22. Simon’s part in the film was scrapped, which lead to some bitterness. The two graduated in 1958 from Forest Hills High School along with classmate <span class="previous-degree">Dennis Tito</span>.</p>
						<img class='degree-image' src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="">
					</div>
				</div>
			</div>
			<div class="gallery-cell">
				<div class="container">
					<div class="slide-info">
						<h2>Laurie Bird</h2>
						<p>Bird was a burgeoning actress who appeared in only 3 films: <em>Two-Lane Blacktop</em>, <em>Cockfighter</em>, and a small role in <em>Annie Hall</em> – before she cut her career short by suicide in 1979, at 25 years of age. She was also a photographer, contributing to her then boyfriend <span class="previous-degree">Art Garfunkel’s</span> album cover <em>Watermark</em>.</p>
						<img class='degree-image' src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="">
					</div>
				</div>
			</div>
			<div class="gallery-cell">
				<div class="container">
					<div class="slide-info">
						<h2>James Taylor</h2>
						<p>Taylor’s song Fire and Rain sold over a million singles. It deals, in part, with Taylor’s struggle to overcome addiction and depression. Early in his career, Taylor checked himself into McLean Hospital in Belmont, an experience that he regards as a “life saver” and would inspire many songs. Taylor also had a short-lived acting stint in the road trip cult classic <a class="paragraph-link" href="https://www.youtube.com/watch?v=_IZPYYDuHXg" target="_blank"><em>Two-Lane Blacktop</em></a>, which also stared <span class="previous-degree">Laurie Bird</span>.</p>
						<img class='degree-image' src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="">
					</div>
				</div>
			</div>
			<div class="gallery-cell">
				<div class="container">
					<div class="slide-info">
						<h2>Joni Mitchell</h2>
						<p><em>So you sign all the papers in the family name / You're sad and you're sorry, but you're not ashamed / Little green, have a happy ending</em> - these are the words Mitchell wrote in the song <em>Little Green</em>. It was about the baby she gave up for adoption in 1965. At the time she was penniless and abandoned by her boyfriend, but Mitchell went on to achieve immense success as a singer..and have legendary love affairs with iconic artists, like Leonard Cohen, Graham Nash, and <span class="previous-degree">James Taylor</span>.</p>
						<img class='degree-image' src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="">
					</div>
				</div>
			</div>
			<div class="gallery-cell">
				<div class="container">
					<div class="slide-info">
						<h2>Bruce Allen</h2>
						<p>Allen has managed some of Canada’s most successful musicians, including Bryan Adams, Michael Bublé and Anne Murray. He pulled together no fewer than 52 famous talents (including actors) to sing in Northern Lights, Canada’s first charity supergroup. Among them were luminaries Neil Young, John Candy, Oscar Peterson and <span class="previous-degree">Joni Mitchell</span>.</p>
						<img class='degree-image' src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="">
					</div>
				</div>
			</div>
			<div class="gallery-cell">
				<div class="container">
					<div class="slide-info">
						<h2>John Zaritsky</h2>
						<p><a class="paragraph-link" href="https://www.youtube.com/watch?v=kS138NuLRzU" target="_blank"><em>Tears Are Not Enough</em></a> was a hit song produced as a famine-relief fundraising effort for Ethiopia. Zaritsky directed a behind-the-scenes documentary by the same name, which captured a one-off assemblage of Canada’s finest artists during the song recording. The event would not have come into fruition without the help of talent manager <span class="previous-degree">Bruce Allen</span>.</p>
						<img class='degree-image' src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" alt="">
					</div>
				</div>
			</div>
		</div>

		
	</main> <!-- /.main -->
<?php get_footer(); ?>