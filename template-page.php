
<?php

	/*
	
		Template Name: Page
	
	*/
		
		get_header();
		
		the_post();

?>

		<h1><a href="/">Ars Mod</a> / <?php echo get_the_title() ?></h1>

		<?php the_content(); ?>

<?php get_footer() ?>