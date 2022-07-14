<?php get_header(); ?>
<main id="primary" class="site-main">
	<section class="error-404 not-found">
		<header class="pge-header">
			<h1 class="page-title">
				<?php esc_attr_e('Oops! This page can&rsquot;t be found','groundctrl'); ?>
			</h1>
		</header>

		<div class="page-content">
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'groundctrl' ); ?></p>

		<?php get_search_form(); ?>
		</div>
	</section>
</main>

<?php
get_footer();
