<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<h1><a href="/">Ars Mod</a> / Projects</h1>
			
	<h2><strong>PROJECT</strong>: <?php the_title(); ?></h2>
	
	<?php the_content(); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>