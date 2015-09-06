<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>
	
	<?php include("banner.php"); ?>

	<div class="degree-option">
		<div class="row">
			<a href="./first" class="degree-1 degree"></a>

			<a href="#" class="degree-2 degree"></a>
		</div>
		
		<div class="row">
			<a href="#" class="degree-3 degree"></a>

			<a href="#" class="degree-4 degree"></a>
		</div>
		
		<div class="row">
			<a href="#" class="degree-5 degree"></a>

			<a href="#" class="degree-6 degree"></a>
		</div>
	</div>

			
</main> <!-- /.main -->

<?php get_footer(); ?>