<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package danielm0reno
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site col-lg-8 mx-auto p-4 py-md-5">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'demo' ); ?></a>

	<header id="masthead" class="site-header d-flex align-items-center pb-3 mb-5 border-bottom m-4">
		<div class="site-branding navbar-brand text-center">
			<?php
			// Custom-logo
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
			echo '<div class="navbar-brand" href="#">
			<img src="' . esc_url( $custom_logo_url ) . '" alt="" width="150" height="100" class="d-inline-block align-text-top">
			</div>';
			// #Custom-logo

			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$demo_description = get_bloginfo( 'description', 'display' );
			if ( $demo_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $demo_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation m-4">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'demo' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container' => 'ul',
					'menu_class' => 'nav col-12 col-md-auto mb-2 justify-content-center mb-md-0',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->