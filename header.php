<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cats
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site wrapper">
	<a class="skip-link screen-reader-text hide" href="#content" hidden><?php esc_html_e( 'Skip to content', 'cats' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding hide-ml-up">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
		
		<nav id="site-navigation" class="main-navigation hide-ml-down" role="navigation">
			<div id="top-gutter"></div>
			<div grid="no-collapse">
				<div column="4">
					<a class="site-title-image" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/images/image_logo.png' ?>" alt=""></a>
				</div>
				<div column="5">
					<div grid="no-collapse no-gutters">
						<?php echo( reformat_wp_nav() ); ?>
					</div>
				</div>
				
				<div column="3"></div>
			</div>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
