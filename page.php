<?php get_header(); ?>

<main id="primary" class="site-main"></main>
	<div class="container pt-5">

		<?php 
			while (have_posts()) : the_post();
			
			get_template_part('templates/content', 'page');

			if(comments_open() || get_comments_number())
			: comments_template();
			endif;
		endwhile;
		?>

	</div>
</main>

<?php
get_footer();
