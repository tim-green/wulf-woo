<?php get_header(); ?>

<main id="content-wrapper">

	<section id="section-slider">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part( 'templates/sections/home', 'slider', $args );

		?>

	</section> <!-- #section-slider -->

	<section id="section-services">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part( 'templates/sections/home', 'services', $args );

		?>

	</section> <!-- #section-services -->

	<section id="section-cta">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 1,
		);

		get_template_part( 'templates/sections/home', 'cta', $args );

		?>

	</section> <!-- #section-news -->
 
	<section id="section-news">

		<section class="container popular-products">
			<h1 class="text-center pt-5">Popular Products</h1>
			<p class="text-center"></p>

			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[products columns=4 limit=4]' ); ?>
			</div>
		</section>

		get_template_part( 'templates/sections/home', 'news', $args );
		<section class="categories pt-5 pb-5">
			<div class="container">
				<h1 class="text-center pt-5">Categories</h1>
				<p class="text-center"></p>

				<div class="row pt-5">
					<div class="categories__col col-md-4 col-sm-12 mb-3">
						<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center text-white"><!-- product cat name --></h2>
							
						</a>
					</div>
					<div class="categories__col col-md-4 col-sm-12 mb-3">
						<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center text-white"><!-- product cat name --></h2>
						</a>
					</div>
					<div class="categories__col col-md-4 col-sm-12 mb-3">
						<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center text-white"><!-- product cat name --></h2>
						</a>
					</div>
				</div>

				<div class="row mb-3">
					<div class="categories__col col-md-4 col-sm-12 mb-3">
						<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center text-white"><!-- product cat name --></h2>
						</a>
					</div>
					<div class="categories__col sale col-md-8 col-sm-12 mb-3">
						<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
							<div class="offer-overlay position-absolute top-0 bottom-0 start-0 end-0" style="z-index: 1;"></div>
							<h2 class="position-absolute top-50 start-0 end-0 mb-0 text-center offer-h2 text-white" style="z-index: 2;"><!-- product cat name --></h2>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="container pt-5 special-offers">
			<h1 class="text-center pt-5">Special Offers</h1>
			<p class="text-center"></p>

	</section> <!-- #section-news -->
 
</main> <!-- #content-wrapper -->
<main id="primary" class="site-main">
		<section class="container pb-5 pt-4 ">
			<!-- ACF slider option here -->
		</section>
	</main><!-- #main -->

<?php
get_footer();
