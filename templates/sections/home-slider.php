<div id="carousel-slider" class="carousel slide" data-bs-ride="carousel">

	<div class="carousel-inner">

		<?php

		$grnd_slidecount = 0;

		// WP Query
		$grnd_slider_query = new WP_Query( $args );

		// WP Loop
		while ( $grnd_slider_query->have_posts() ) :
			$grnd_slider_query->the_post();

			$grnd_slidecount++;

			?>

		<div class="carousel-item 
			<?php
			if ( 1 == $grnd_slidecount ) {
				echo 'active'; }
			?>
		">

			<img class="d-block w-100" src="<?php the_post_thumbnail_url( 'grnd_big' ); ?>" alt="<?php grnd_thumbnail_alt(); ?>" loading="lazy">

			<div class="carousel-caption">
				<h2><?php the_title(); ?></h2>
				<div class="d-none d-md-block"><?php the_excerpt(); ?></div>
				<a class="btn btn-light" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'groundctrl' ); ?></a>
			</div>

		</div>

		<?php
			endwhile;
			// WP Query Reset
			wp_reset_query();
			wp_reset_postdata();
		?>
		
	</div>

	<a class="carousel-control-prev" data-bs-target="#carousel-slider" role="button" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>

	<a class="carousel-control-next" data-bs-target="#carousel-slider" role="button" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>

</div>