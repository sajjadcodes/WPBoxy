<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPBoxy
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wpboxy' ); ?></a>

	<header id="masthead" class="header">

		<div class="container">

			<div class="header__primary">
				<div class="header__primary--logo">
					<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title secondary-heading"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						endif;
						$wpboxy_description = get_bloginfo( 'description', 'display' );
						if ( $wpboxy_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $wpboxy_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div>
			<nav id="site-navigation" class="header__primary--nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container'		 =>'ul',
					'menu_class'	 =>'nav__list',
					'fallback_cb'	 =>false,
					'depth'			=> 4
					
					
				)
			);
			?>
		</nav>			
			</div>
			
	
		</div>

	<!-- #site-navigation -->
	</header><!-- #masthead -->

	