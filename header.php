<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a href="#primary" class="skip-link screen-reader-text"><?php esc_html_e('Skip to content','groundctrl');?></a>

	<div class="announcement-bar pt-2 pb-2">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul class="announcement__list">
						<li><i class="fa-solid fa-phone"></i></li>
						<li><i class="fa-solid fa-envelope"></i></li>
					</ul>
				</div>

				<div class="col-md-8 d-flex justify-content-end">
				<ul class="announcement__list">
						<li><i class="fa-solid fa-truck-front"></i></li>
						<li><i class="fa-solid fa-right-left"></i></li>
						<li><i class="fa-solid fa-headset"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<header id="masthead" class="site-header">
		<div class="container pt-2 pb-2">
			<div class="row align-items-center">
				<div class="co site-header__logo d-flex justify-content-center justify-content-md-start">
					<!-- acf option for logo -->
				</div>
				<div class="col-md-5">
					<!-- get search form -->
				</div>

				<div class="col cart d-flex justify-content-center justify-content-md-end align-tems-center pt-2">
				<a href="<?php echo wc_get_cart_url(); ?>"><i class="fa-solid fa-basket-shopping p-2"></i></a>
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
			</div>
		</div>
</div>

		<?php
			// get_template_part('templates/header/header', 'topbar');
			get_template_part( 'templates/header/header', 'simple' );
		?>

	</header>
