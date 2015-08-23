<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	
	<?php include("banner.php"); ?>

	<div class="degree-option">
		<div class="row">
			<div class="degree-1">
				<h1>test 1</h1>
			</div>

			<div class="degree-2">
				<h1>test 2</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="degree-3">
				<h1>test 3</h1>
			</div>

			<div class="degree-4">
				<h1>test 4</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="degree-5">
				<h1>test 5</h1>
			</div>

			<div class="degree-6">
				<h1>test 6</h1>
			</div>
		</div>
	</div>

			
</main> <!-- /.main -->

<?php get_footer(); ?>